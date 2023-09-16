<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class RestoreUpdateController extends Controller
{
    public function __invoke($id)
    {
        Film::onlyTrashed()->find($id)->restore();

        return redirect()->route('films.index');
    }
}
