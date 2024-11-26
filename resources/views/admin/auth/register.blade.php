@extends('layouts.login')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5 my-2 text-center">
            <h3 class="p-3">Регистрация администратора</h3>
        </div>
        <div class="text-center p-4" style="background-color: #656565; color: white; border-radius: 25px">
            <form method="POST" action="{{ route('admin.register.submit') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Имя" value="{{ old('name') }}" required>
                </div>
                <div class="input-group mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Электронная почта" value="{{ old('email') }}" required>
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required>
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Подтверждение пароля" required>
                </div>
                <button type="submit" class="btn mt-2" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 0.25rem; border: none; padding: 0.5rem 1rem; text-align: center;">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</div>

@endsection
