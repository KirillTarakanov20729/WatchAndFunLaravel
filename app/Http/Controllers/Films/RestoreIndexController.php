<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class RestoreIndexController extends Controller
{
    public function __invoke()
    {
        $deletedFilms = Film::onlyTrashed()->get();

        return view('films/restoreIndex', compact('deletedFilms'));
    }
}
