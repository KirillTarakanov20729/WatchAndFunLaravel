@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form class="text-light p-4" action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <h2 class="text-center mb-4">Вход</h2>
                    <div class="mb-3 text-center">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{request()->old('email')}}" placeholder="Введите email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 text-center">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Введите пароль">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 text-center">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Запомнить меня</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
