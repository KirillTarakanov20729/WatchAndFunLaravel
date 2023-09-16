<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'value', 'description', 'duration', 'image', 'country_id', 'genre_id', 'actors_id', 'director_id'
    ];
    protected $dates = ['deleted_at'];


    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function director() : BelongsTo
    {
        return $this->belongsTo(Director::class);
    }

    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class, 'actors_films', 'film_id', 'actor_id');
    }
}
