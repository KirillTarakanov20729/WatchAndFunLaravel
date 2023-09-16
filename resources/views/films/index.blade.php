@extends('layouts.app')

@section('content')
    @can('view', auth()->user())
    <div class="text-center mt-4">
        <a href="{{route('films.create')}}" class="btn btn-secondary">Создать фильм</a>
        <a href="{{ route('entities.create')}}" class="btn btn-secondary">Создать сущность</a>
        <a href="{{ route('entities.edit')}}" class="btn btn-secondary">Изменить сущность</a>
        <a href="{{ route('entities.get_delete')}}" class="btn btn-secondary">Удалить сущность</a>
        <a href="{{ route('films.restore.index') }}" class="btn btn-secondary">Удаленные фильмы</a>
    </div>
    @endcan

    <div class="row justify-content-center mt-4 mx-auto text-center" style="width: 80%;">
        @foreach($films as $film)
            <div class="col col-md-4">
                <div class="card bg-black text-white">
                    <div class="image-container">
                        <img class="card-img-top" src="{{ asset('storage/' . $film['image']) }}" alt="Обложка фильма">
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-title">{{ $film->value }}</h5>
                        <a href="{{route('films.show', $film->id)}}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

