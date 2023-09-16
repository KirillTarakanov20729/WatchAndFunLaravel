<?php

namespace App\Services\Films;

use App\Models\Film;
use Illuminate\Support\Facades\Storage;

class RestoreDeleteFilmsService
{
    public function delete($id): void
    {
        $film = Film::onlyTrashed()->find($id);

        Storage::delete($film->image);

        $film->forceDelete();
    }
}
