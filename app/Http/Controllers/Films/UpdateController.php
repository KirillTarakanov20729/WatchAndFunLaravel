<?php

namespace App\Http\Controllers\Films;

use App\Http\Controllers\Controller;
use App\Http\Requests\Film\UpdateFilmRequest;
use App\Models\Film;
use App\Services\Films\UpdateFilmsService;

class UpdateController extends Controller
{
    protected $UpdateFilmsService;
    public function __construct(UpdateFilmsService $UpdateFilmsService)
    {
        $this->UpdateFilmsService = $UpdateFilmsService;
    }

    public function __invoke(UpdateFilmRequest $request)
    {
        $this->UpdateFilmsService->update($request);

        if (Film::withTrashed()->find($request->input('film_id'))->trashed()) {
            return redirect()->route('films.restore.index');
        }
        else {
            return redirect()->route('films.show', $request->input('film_id'));
        }
    }
}
