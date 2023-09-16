<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Http\Requests\Film\CreateFilmRequest;
use App\Services\Films\StoreFilmsService;

class StoreController extends Controller
{
    protected $StoreFilmsService;

    public function __construct(StoreFilmsService $StoreFilmsService)
    {
        $this->StoreFilmsService = $StoreFilmsService;
    }

    public function __invoke(CreateFilmRequest $request)
    {
        $this->StoreFilmsService->store($request);

        return redirect()->route('films.index');
    }
}
