<?php

namespace App\Http\Controllers\Entities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Entity\DeleteEntityRequest;
use App\Services\Entities\DeleteEntitiesService;

class DeleteController extends Controller
{
    protected $DeleteEntitiesService;

    public function __construct(DeleteEntitiesService $DeleteEntitiesService)
    {
        $this->DeleteEntitiesService = $DeleteEntitiesService;
    }

    public function __invoke(DeleteEntityRequest $request)
    {
        $this->DeleteEntitiesService->delete($request);

        return redirect()->back();
    }
}
