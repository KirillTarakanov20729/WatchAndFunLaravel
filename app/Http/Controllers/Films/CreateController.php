<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Country;
use App\Models\Director;
use App\Models\Genre;
use App\Services\Films\CreateFilmsService;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    protected $CreateFilmsService;

    public function __construct(CreateFilmsService $CreateFilmsService)
    {
        $this->CreateFilmsService = $CreateFilmsService;
    }

    public function __invoke()
    {
       $data = $this->CreateFilmsService->getAttributes();
        return view('films.create', compact('data'));
    }
}
