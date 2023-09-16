@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-2">
                <div class="card">
                    <div class="card-header text-center">Добавить сущность</div>
                    <div class="card-body text-center">
                        <form method="POST" action="{{ route('entities.store') }}" >
                        @csrf
                            <div class="form-group mb-2">
                                <label for="entity_type">Тип</label>
                                <select class="form-control @error('entity_type') is-invalid @enderror" id="entity_type" name="entity_type">
                                    <option value="">Выберите тип</option>
                                    <option value="actor" {{old('entity_type') == 'actor' ? 'selected' : ''}}>Актер</option>
                                    <option value="director" {{old('entity_type') == 'director' ? 'selected' : ''}}>Режиссер</option>
                                    <option value="genre" {{old('entity_type') == 'genre' ? 'selected' : ''}}>Жанр</option>
                                    <option value="country" {{old('entity_type') == 'country' ? 'selected' : ''}}>Страна</option>
                                </select>
                                @error('entity_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="value">Значение (люди в формате Фамилия Имя)</label>
                                <input type="text" class="form-control @error('value') is-invalid @enderror" id="value" name="value" value="{{ old('value') }}">
                                @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group text-center mt-2">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            </div>
        </div>
@endsection
