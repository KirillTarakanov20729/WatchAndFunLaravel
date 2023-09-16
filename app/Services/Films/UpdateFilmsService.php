<?php

namespace App\Services\Films;

use App\Http\Requests\Film\UpdateFilmRequest;
use App\Models\Film;
use Illuminate\Support\Facades\Storage;

class UpdateFilmsService
{
    public function update(UpdateFilmRequest $request): void
    {
        try {
            $data = $request->validated();
            $film = Film::withTrashed()->find($data['film_id']);
            $actors = $request->input('actors');
            unset($data['film_id']);

            $this->updateImage($data, $film);
            $this->updateFilm($data, $film);
            $this->updateActors($film, $actors);

        } catch (\Exception $exception) {
            abort(500, $exception->getMessage());
        }
    }

    private function updateImage(&$data, $film): void
    {
        if (isset($data['image'])) {
            Storage::delete($film->image);
            $data['image'] = $data['image']->store('/images');
        }
    }

    private function updateFilm($data, &$film): void
    {
        $film->update($data);
    }

    private function updateActors($film, $actors): void
    {
        $film->actors()->sync($actors);
    }
}
