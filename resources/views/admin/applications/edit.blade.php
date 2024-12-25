@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 fw-semibold" style="font-size: 1.75rem;">Редактировать заявку</h1>

    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-12">
            <form action="{{ route('admin.applications.update', $application->id) }}" method="POST" style="background: #ffffff; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px;">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="form-label" style="font-weight: 500;">Имя</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-control" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        value="{{ old('name', $application->name) }}" 
                        required
                        placeholder="Введите имя">
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label" style="font-weight: 500;">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-control" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        value="{{ old('email', $application->email) }}" 
                        required
                        placeholder="Введите email">
                </div>

                <div class="mb-4">
                    <label for="phone" class="form-label" style="font-weight: 500;">Телефон</label>
                    <input 
                        type="text" 
                        id="phone" 
                        name="phone" 
                        class="form-control" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        value="{{ old('phone', $application->phone) }}" 
                        required
                        placeholder="Введите номер телефона">
                </div>

                <div class="mb-4">
                    <label for="status" class="form-label" style="font-weight: 500;">Статус</label>
                    <select 
                        id="status" 
                        name="status" 
                        class="form-select" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        required>
                        @foreach($statuses as $key => $status)
                            <option value="{{ $key }}" @if($application->status === $key) selected @endif>
                                {{ $status['label'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="comment" class="form-label" style="font-weight: 500;">Комментарий</label>
                    <textarea 
                        id="comment" 
                        name="comment" 
                        class="form-control" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        rows="4" 
                        placeholder="Введите комментарий">{{ old('comment', $application->comment) }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn w-100" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 6px; border: none;">
                        Сохранить
                    </button>
                    <a href="{{ route('admin.applications') }}" class="btn btn-light w-100" style="font-size: 1rem; border-radius: 6px; border: 1px solid #ced4da;">
                        Отмена
                    </a>
                </div>
            </form>

            <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" class="mt-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100" style="font-size: 1rem; border-radius: 6px;" onclick="return confirm('Вы уверены, что хотите удалить эту заявку?')">
                    Удалить заявку
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
