<?php

namespace App\Services\Entities;

use App\Http\Requests\Entity\UpdateEntityRequest;
use App\Models\Actor;
use App\Models\Country;
use App\Models\Director;
use App\Models\Genre;

class UpdateEntitiesService
{
    public function update(UpdateEntityRequest $request): void
    {
        $entityType = $request->input('entity_type');
        $new_value = $request->input('new_value');
        $old_value = $request->input('old_value');

        switch ($entityType) {
            case 'actor':
                $actor = Actor::where('value', $old_value)->first();
                $actor->update(['value' => $new_value]);
                break;
            case 'director':
                $director = Director::where('value', $old_value)->first();
                $director->update(['value' => $new_value]);
                break;
            case 'genre':
                $genre = Genre::where('value', $old_value)->first();
                $genre->update(['value' => $new_value]);
                break;
            case 'country':
                $country = Country::where('value', $old_value)->first();
                $country->update(['value' => $new_value]);
                break;
        }
    }
}
