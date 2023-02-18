<?php

namespace App\Http\Controllers;

use App\Dao\Repositories\InventarisNamaRepository;
use App\Http\Requests\InventarisNamaRequest;
use App\Http\Services\CreateService;
use App\Http\Services\SingleService;
use App\Http\Services\UpdateService;
use Plugins\Response;

class InventarisNamaController extends MasterController
{
    public function __construct(InventarisNamaRepository $repository, SingleService $service)
    {
        self::$repository = self::$repository ?? $repository;
        self::$service = self::$service ?? $service;
    }

    protected function beforeForm()
    {
        self::$share = [
        ];
    }

    public function postCreate(InventarisNamaRequest $request, CreateService $service)
    {
        $data = $service->save(self::$repository, $request);
        return Response::redirectBack($data);
    }

    public function postUpdate($code, InventarisNamaRequest $request, UpdateService $service)
    {
        $data = $service->update(self::$repository, $request, $code);
        return Response::redirectBack($data);
    }
}
