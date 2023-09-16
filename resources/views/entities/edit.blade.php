@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-2">
                <div class="card">
                    <div class="card-header text-center">Изменить сущность</div>
                    <div class="card-body text-center">
                        <form method="POST" action="{{ route('entities.update') }}" >
                            @csrf
                            @method('PUT')
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
                                <label for="old_value">Старое значение (люди в формате Фамилия Имя)</label>
                                <input type="text" class="form-control @error('old_value') is-invalid @enderror" id="old_value" name="old_value" value="{{ old('old_value') }}">
                                @error('old_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="new_value">Новое значение (люди в формате Фамилия Имя)</label>
                                <input type="text" class="form-control @error('new_value') is-invalid @enderror" id="new_value" name="new_value" value="{{ old('new_value') }}">
                                @error('new_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group text-center mt-2">
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
