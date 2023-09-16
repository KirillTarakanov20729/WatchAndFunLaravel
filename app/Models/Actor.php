<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'value'
    ];

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'actors_films', 'actor_id', 'film_id');
    }
}
