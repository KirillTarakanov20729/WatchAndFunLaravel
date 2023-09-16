<?php

namespace App\Services\Films;

use App\Models\Actor;
use App\Models\Country;
use App\Models\Director;
use App\Models\Genre;

class CreateFilmsService
{
    public function getAttributes(): array
    {
        $data = [];
        $data['countries'] = Country::orderBy('value')->get();
        $data['genres'] = Genre::orderBy('value')->get();
        $data['directors'] = Director::orderBy('value')->get();
        $data['actors'] = Actor::orderBy('value')->get();

        return $data;
    }
}
