@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card bg-black text-white" style="width: 100%;">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('storage/'. $film->image) }}" alt="Фильм" style="max-width: 100%;">
                            </div>

                            <div class="col-md-6 text-center">
                                <h3 class="card-title">{{ $film->value }}</h3>

                                <p class="card-text">{{ $film->description }}</p>

                                <div class="film-info">
                                    <label for="duration">Длительность</label>
                                    <p class="card-text">{{ gmdate('H:i', strtotime($film->duration)) }}</p>
                                </div>

                                <div class="film-info">
                                    <label for="genre">Жанр</label>
                                    <p class="card-text">{{ $film->genre->value }}</p>
                                </div>

                                <div class="film-info">
                                    <label for="director">Режиссер</label>
                                    <p class="card-text">{{ implode(' ', array_reverse(explode(' ', $film->director->value))) }}</p>
                                </div>

                                <div class="film-info">
                                    <label for="country">Страна</label>
                                    <p class="card-text">{{ $film->country->value }}</p>
                                </div>

                                <h4>Актеры</h4>
                                @foreach($film->actors as $actor)
                                    <p class="m-0">{{ implode(' ', array_reverse(explode(' ', $actor->value))) }}</p>
                                @endforeach

                            </div>

                        </div>

                        @can('view', auth()->user())
                            <div class="row justify-content-start mt-2">
                                <div class="col-md-6 text-center">

                                    <form action="{{ route('films.edit', $film->id) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-warning w-100">Изменить</button>
                                    </form>

                                    <form action="{{ route('films.delete', $film->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger w-100 mt-2">Удалить</button>
                                    </form>

                                </div>
                            </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

