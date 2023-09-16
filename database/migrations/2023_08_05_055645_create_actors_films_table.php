<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actors_films', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('film_id');

            $table->index('actor_id', 'actors_films_actor_idx');
            $table->index('film_id', 'actors_films_film_idx');

            $table->foreign('actor_id', 'actors_films_actor_fk')
                ->on('actors')
                ->references('id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('film_id', 'actors_films_film_fk')
                ->on('films')
                ->references('id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();



            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors_films');
    }
};
