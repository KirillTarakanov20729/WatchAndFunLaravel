<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Services\Films\CreateFilmsService;
use Illuminate\Http\Request;

class EditController extends Controller
{
    protected $CreateFilmsService;
    public function __construct(CreateFilmsService $CreateFilmsService)
    {
        $this->CreateFilmsService = $CreateFilmsService;
    }

    public function __invoke($id)
    {
        $data = $this->CreateFilmsService->getAttributes();

        $data['film'] = Film::withTrashed()->find($id);
        $data['actors_film'] = $data['film']->actors()->get()->pluck('id')->toArray();

        return view('films.edit', compact('data'));
    }
}
