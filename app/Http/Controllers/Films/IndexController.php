<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }
}
