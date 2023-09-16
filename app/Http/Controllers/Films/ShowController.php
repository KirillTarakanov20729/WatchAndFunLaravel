<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Film $film)
    {
        return view('films/show', compact('film'));
    }
}
