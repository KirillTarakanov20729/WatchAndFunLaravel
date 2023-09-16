<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Services\Users\StoreRegisterService;

class StoreController extends Controller
{
    protected $StoreRegisterService;

    public function __construct(StoreRegisterService $StoreRegisterService)
    {
        $this->StoreRegisterService = $StoreRegisterService;
    }

    public function __invoke(RegisterRequest $request)
    {
        $this->StoreRegisterService->store($request);

        return redirect(route('films.index'));
    }
}
