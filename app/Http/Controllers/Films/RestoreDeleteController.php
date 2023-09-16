<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Services\Films\RestoreDeleteFilmsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestoreDeleteController extends Controller
{
    protected $RestoreDeleteFilmsService;
    public function __construct(RestoreDeleteFilmsService $RestoreDeleteFilmsService)
    {
        $this->RestoreDeleteFilmsService = $RestoreDeleteFilmsService;
    }

    public function __invoke($id)
    {
        $this->RestoreDeleteFilmsService->delete($id);

        return redirect()->route('films.restore.index');
    }
}
