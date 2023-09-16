<?php

namespace App\Http\Controllers\Entities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Entity\UpdateEntityRequest;
use App\Services\Entities\UpdateEntitiesService;

class UpdateController extends Controller
{
    protected $UpdateEntitiesService;
    public function __construct(UpdateEntitiesService $UpdateEntitiesService)
    {
        $this->UpdateEntitiesService = $UpdateEntitiesService;
    }

    public function __invoke(UpdateEntityRequest $request)
    {
        $this->UpdateEntitiesService->update($request);

        return redirect()->back();
    }
}
