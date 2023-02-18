<?php

namespace App\Http\Middleware;

use App\Dao\Models\SystemPermision;
use Closure;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Plugins\Alert;
use Plugins\Core;
use Plugins\Helper;
use Plugins\Query;
use Plugins\Template;

class AccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if(!auth()->check()){
            return redirect()->route('login');
        }

        $route = request()->route() ?? false;
        $action = $route->getAction();
        $action_code = $action['as'] ?? 'home';
        $action_controller = false;
        $action_full_controller = false;
        $action_route = $action['name'] ?? false;

        if (isset($action['controller'])) {
            $array_controller = explode('@', $action['controller']) ?? [];
            $action_controller = Core::getControllerName($array_controller[0]);
            $action_full_controller = $array_controller[0];
        }

        $menu = (array)Query::getmenu($action_route) ?? [];
        if(request()->segment(1) != 'home'){
            $group = Query::groups(true);
        }
        else{
            $group = Query::groups(auth()->user()->role);
        }

        if($group->count() == 0 && request()->segment(1) != 'home'){
            Alert::error(ERROR_PERMISION);
            abort(402, ERROR_PERMISION);
        }

        $permision = Query::permision();
        if($permision->count() > 0){
            $data_access = $permision
            ->where(SystemPermision::field_module(), $action_controller);
            $access = $data_access->pluck('system_permision_code')->toArray() ?? [];
            if($data_access){
                Blade::if('can', function ($value) use ($access) {
                    return !(in_array(moduleAction($value), $access));
                });

                $check = $data_access
                ->where(SystemPermision::field_code(), $action_code);

                $check_role = $check->where(SystemPermision::field_role(), auth()->user()->role);

                if($check_role->count() > 0){
                    Alert::error(ERROR_PERMISION);
                    abort(402, ERROR_PERMISION);
                }

                $check_user = $check->where(SystemPermision::field_user(), auth()->user()->id);

                if($check_user->count() > 0){
                    Alert::error(ERROR_PERMISION);
                    abort(402, ERROR_PERMISION);
                }

                $check_level = $check->where(SystemPermision::field_level(), auth()->user()->level);

                if($check_level->count() > 0){
                    Alert::error(ERROR_PERMISION);
                    abort(402, ERROR_PERMISION);
                }

                $check_module = $check
                ->whereNull(SystemPermision::field_level())
                ->whereNull(SystemPermision::field_user())
                ->whereNull(SystemPermision::field_role());

                if($check_module->count() > 0){
                    Alert::error(ERROR_PERMISION);
                    abort(402, ERROR_PERMISION);
                }
            }
        }

        try {

            $data = array_merge($menu,[
                'action_code' => $action_code,
                'module_code' => $action_controller,
                'template' => $action_controller,//legacy
                'route' => $action_route,
                'controller' => $action_full_controller,
                'filter' => Template::filter(),
                'groups' => $group,
                'environment' => env('APP_ENV', 'local'),
                'app_url' => url('/'),
                'timer' => env('APP_TIMER_ALERT', 5000),
            ]);

            share($data);
        } catch (\Throwable$th) {
            //throw $th;
        }

        return $next($request);
    }
}
