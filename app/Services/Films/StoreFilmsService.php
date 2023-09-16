<?php

namespace App\Services\Films;

use App\Http\Requests\Film\CreateFilmRequest;
use App\Models\Actor;
use App\Models\Film;
use Symfony\Component\HttpKernel\Exception\HttpException;

class StoreFilmsService
{
    public function store(CreateFilmRequest $request): void
    {
        try {
            $data = $request->validated();
            $actors = $request->input('actors');
            $image = $request->file('image');

            $this->storeImage($data, $image);
            $this->createFilm($data, $actors);
        } catch (\Exception $exception) {
            abort(500, $exception->getMessage());
        }
    }

    private function storeImage(&$data, $image): void
    {
        $data['image'] = $image->store('/images');
    }

    private function createFilm($data, $actors): void
    {
        $film = Film::create($data);

        foreach ($actors as $actorId) {
            $actor = Actor::find($actorId);
            if ($actor) {
                $film->actors()->attach($actor);
            }
        }
    }
}
