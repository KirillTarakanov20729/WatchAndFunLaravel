<?php

namespace App\Http\Controllers\Entities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Entity\CreateEntityRequest;
use App\Services\Entities\StoreEntitiesService;


class StoreController extends Controller
{
    protected $StoreEntitiesService;
    public function __construct(StoreEntitiesService $StoreEntitiesService)
    {
        $this->StoreEntitiesService = $StoreEntitiesService;
    }

    public function __invoke(CreateEntityRequest $request)
    {
        $this->StoreEntitiesService->store($request);

        return redirect()->back();
    }
}
