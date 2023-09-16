<?php

namespace App\Services\Entities;

use App\Http\Requests\Entity\CreateEntityRequest;
use App\Models\Actor;
use App\Models\Country;
use App\Models\Director;
use App\Models\Genre;

class StoreEntitiesService
{
    public function store(CreateEntityRequest $request): void
    {
        $entityType = $request->input('entity_type');
        $value = $request->input('value');

        switch ($entityType) {
            case 'actor':
                Actor::create(['value' => $value]);
                break;
            case 'director':
                Director::create(['value' => $value]);
                break;
            case 'genre':
                Genre::create(['value' => $value]);
                break;
            case 'country':
                Country::create(['value' => $value]);
                break;
        }
    }
}
