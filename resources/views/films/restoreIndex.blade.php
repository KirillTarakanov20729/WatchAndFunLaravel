@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-4 mx-auto text-center" style="width: 80%;">
        @foreach($deletedFilms as $film)
            <div class="col-12 col-md-3">
            <div class="card bg-black text-white">
                    <div class="image-container">
                        <img class="card-img-top" src="{{ asset('storage/' . $film->image) }}" alt="Обложка фильма">
                    </div>
                    <div class="row justify-content-center mt-2">
                        <div class="col-md-12 text-center">
                            <h4 class="card-title">{{ $film->value }}</h4>
                            <p class="card-text">{{ $film->description }}</p>
                            <form action="{{ route('films.restore.update', $film->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary w-100">Восстановить</button>
                            </form>

                            <form action="{{ route('films.edit', $film->id) }}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-warning w-100 mt-2">Изменить</button>
                            </form>

                            <form action="{{ route('films.restore.delete', $film->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100 mt-2 mb-2">Удалить</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
