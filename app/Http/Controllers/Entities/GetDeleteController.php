<?php

namespace App\Http\Controllers\Entities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetDeleteController extends Controller
{
    public function __invoke()
    {
        return view('entities/delete');
    }
}
