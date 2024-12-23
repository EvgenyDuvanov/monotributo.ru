@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Создать новую услугу</h1>
    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Название услуги</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="info">Описание</label>
            <textarea id="info" name="info" class="form-control">{{ old('info') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="price">Цена</label>
            <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Создать услугу</button>
        <a href="{{ route('admin.services') }}" class="btn btn-secondary">Отмена</a>
    </form>
</div>
@endsection
