@extends('layouts.app')

@section('content')
    <div class="container text-white">
        <h1>Ошибка сервера</h1>
        <p>Произошла ошибка при обновлении фильма.</p>
        <p>Пожалуйста, попробуйте еще раз позже или обратитесь к администратору.</p>
        <hr>
        <h3>Информация об ошибке:</h3>
        <p>{{ $exception->getMessage() }}</p>
        <p>{{ $exception->getFile() }}:{{ $exception->getLine() }}</p>
        <pre>{{ $exception->getTraceAsString() }}</pre>
    </div>
@endsection
