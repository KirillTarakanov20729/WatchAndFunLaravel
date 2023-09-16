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
        Schema::create('films', function (Blueprint $table) {
            $table->id();

            $table->string('value');
            $table->text('description');
            $table->time('duration');
            $table->string('image');

            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('director_id');

            $table->index('genre_id', 'film_genre_idx');
            $table->index('country_id', 'film_country_idx');
            $table->index('director_id', 'film_director_idx');

            $table->foreign('genre_id', 'film_genre_fk')
                ->on('genres')
                ->references('id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('country_id', 'film_country_fk')
                ->on('countries')
                ->references('id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('director_id', 'film_director_fk')
                ->on('directors')
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
        Schema::dropIfExists('films');
    }
};
