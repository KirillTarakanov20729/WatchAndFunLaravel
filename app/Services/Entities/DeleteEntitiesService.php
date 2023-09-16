<?php

namespace App\Services\Entities;

use App\Http\Requests\Entity\DeleteEntityRequest;
use App\Models\Actor;
use App\Models\Country;
use App\Models\Director;
use App\Models\Genre;

class DeleteEntitiesService
{
    public function delete(DeleteEntityRequest $request): void
    {
        $entityType = $request->input('entity_type');
        $value = $request->input('value');

        switch ($entityType) {
            case 'actor':
                $actor = Actor::where('value', $value)->first();
                $actor->delete();
                break;
            case 'director':
                $director = Director::where('value', $value)->first();
                $director->delete();
                break;
            case 'genre':
                $genre = Genre::where('value', $value)->first();
                $genre->delete();
                break;
            case 'country':
                $country = Country::where('value', $value)->first();
                $country->delete();
                break;
        }
    }
}
