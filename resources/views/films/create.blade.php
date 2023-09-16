@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-2">
                <div class="card">
                    <div class="card-header text-center">Добавить фильм</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('films.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="value">Название фильма</label>
                                <input type="text" class="form-control @error('value') is-invalid @enderror" id="value" name="value" value="{{ old('value') }}">
                                @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Описание</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{old('description')}}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="duration">Продолжительность</label>
                                <input type="time" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{old('duration')}}">
                                @error('duration')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="genre_id">Жанр</label>
                                <select class="form-control @error('genre_id') is-invalid @enderror" id="genre_id" name="genre_id">
                                    <option value="">Выберите жанр</option>
                                    @foreach ($data['genres'] as $genre)
                                        <option value="{{ $genre->id }}" {{old('genre_id') == $genre->id ? 'selected' : ''}}>{{ $genre->value }}</option>
                                    @endforeach
                                </select>
                                @error('genre_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="country_id">Страна</label>
                                <select class="form-control @error('country_id') is-invalid @enderror" id="country_id" name="country_id">
                                    <option value="">Выберите страну</option>
                                    @foreach ($data['countries'] as $country)
                                        <option value="{{ $country->id }}" {{old('country_id') == $country->id ? 'selected' : ''}}>{{ $country->value }}</option>
                                    @endforeach
                                    @error('country_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="director_id">Режиссер</label>
                                <select class="form-control @error('director_id') is-invalid @enderror" id="director_id" name="director_id">
                                    <option value="">Выберите режиссера</option>
                                    @foreach ($data['directors'] as $director)
                                        <option value="{{ $director->id }}" {{old('director_id') == $director->id ? 'selected' : ''}}>{{ $director->value }}</option>
                                    @endforeach
                                    @error('director_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="actors">Актеры</label>
                                <select class="form-control @error('actors') is-invalid @enderror" id="actors" name="actors[]" multiple>
                                    @foreach ($data['actors'] as $actor)
                                        <option value="{{ $actor->id }}" {{ in_array($actor->id, old('actors', [])) ? 'selected' : '' }}>
                                            {{ $actor->value }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('actors')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group text-center mt-4">
                                <div class="d-flex flex-column">
                                    <div class="text-center mx-auto">
                                        <label for="image">Изображение</label>
                                    </div>
                                    <input type="file" class="form-control-file mx-auto @error('image') is-invalid @enderror" id="image" name="image">
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
