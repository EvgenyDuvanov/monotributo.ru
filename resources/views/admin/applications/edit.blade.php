@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Редактировать заявку</h2>
    <form action="{{ route('admin.applications.update', $application->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $application->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $application->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Телефон</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $application->phone) }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Статус</label>
            <select id="status" name="status" class="form-select" required>
                @foreach($statuses as $key => $status)
                    <option value="{{ $key }}" @if($application->status === $key) selected @endif>
                        {{ $status['label'] }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Комментарий</label>
            <textarea id="comment" name="comment" class="form-control" rows="4">{{ old('comment', $application->comment) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #0dbdfd; border: none;">Сохранить</button>
        <a href="{{ route('admin.applications') }}" class="btn btn-secondary">Отмена</a>
    </form>
</div>
@endsection
