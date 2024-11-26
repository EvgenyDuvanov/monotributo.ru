@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Добро пожаловать в панель администратора!</h1>
    <p>Здесь вы можете управлять сайтом, добавлять контент и следить за статистикой.</p>
    <form method="POST" action="{{ route('admin.logout') }}" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-danger">Выйти</button>
    </form>
</div>
@endsection