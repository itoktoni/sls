<?php

use App\Dao\Enums\MenuType;
use App\Dao\Facades\EnvFacades;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Buki\AutoRoute\AutoRouteFacade as AutoRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Plugins\Core;
use Plugins\Helper;
use Plugins\Query;
use Plugins\Template;


Route::get('console', [HomeController::class, 'console'])->name('console');

Route::get('/', function () {

    return redirect('home');

})->name('one');

Route::get('/signout', 'App\Http\Controllers\Auth\LoginController@logout')->name('signout');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->middleware(['access'])->name('home');
Route::get('/error-402', 'App\Http\Controllers\HomeController@error402')->middleware(['access'])->name('error-402');
Route::get('/doc', 'App\Http\Controllers\HomeController@doc')->middleware(['access'])->name('doc');

Route::match(['POST', 'GET'], 'change-password', 'App\Http\Controllers\UserController@changePassword', ['name' => 'change-password'])->middleware('auth');
Auth::routes();

$routes = Query::groups();
// $routes = Template::routes();

// Route::middleware(['auth', 'access'])->group(function () {
//     Route::prefix('admin')->group(function () {
//         // Route::resource('roles', RolesController::class);
//         // AutoRoute::auto(Core::getControllerName(UserController::class), UserController::class);
//         // AutoRoute::auto('actor', RolesController::class, ['name' => Core::getControllerName(RolesController::class)]);
//         AutoRoute::auto('user', UserController::class, ['name' => Core::getControllerName(UserController::class)]);
//     });
// });

Route::middleware(['auth', 'access'])->group(function () use($routes) {
    Route::prefix('admin')->group(function () use ($routes){
        if ($routes) {
            foreach ($routes as $group) {
                Route::group(['prefix' => $group->field_primary, 'middleware' => [
                    'auth',
                    'access',
                ]], function () use ($group) {
                    // -- nested group
                    if ($menus = $group->has_menu) {
                        foreach ($menus as $menu) {

                            if($menu->field_type == MenuType::Menu){

                                Route::group(['prefix' => 'default'], function () use ($menu) {
                                    try {
                                        AutoRoute::auto($menu->field_url, $menu->field_controller, ['name' => $menu->field_primary]);
                                    } catch (\Throwable$th) {
                                        //throw $th;
                                    }
                                });


                            } elseif($menu->field_type == MenuType::Group){

                                if ($links = $menu->has_link) {
                                    Route::group(['prefix' => $menu->field_url], function () use ($links) {
                                        foreach ($links as $link) {

                                            try {
                                                AutoRoute::auto($link->field_url, $link->field_controller, ['name' => $link->field_primary]);
                                            } catch (\Throwable$th) {
                                                //throw $th;
                                            }

                                        }
                                    });
                                }
                            }
                        }
                    }
                    // end nested group

                });
            }
        }
    });

});

Route::post('upload_config', function (Request $request) {

    $file = $request->file('file');
    $field = $request->file('name');
    // $filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $name = $field . '.' . $extension;
    $file->storeAs('/public/', $name);

    EnvFacades::setValue($field, $name);

    return $name;

})->name('upload_config');