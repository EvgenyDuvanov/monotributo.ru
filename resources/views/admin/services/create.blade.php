@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 fw-semibold" style="font-size: 1.75rem;">Создать новую услугу</h1>

    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-12">
            <form action="{{ route('admin.services.store') }}" method="POST" style="background: #ffffff; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px;">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label" style="font-weight: 500;">Название услуги</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-control" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        value="{{ old('name') }}" 
                        required
                        placeholder="Введите название">
                </div>

                <div class="mb-4">
                    <label for="info" class="form-label" style="font-weight: 500;">Описание</label>
                    <textarea 
                        id="info" 
                        name="info" 
                        class="form-control" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        rows="4" 
                        placeholder="Введите описание">{{ old('info') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="price" class="form-label" style="font-weight: 500;">Цена</label>
                    <input 
                        type="number" 
                        id="price" 
                        name="price" 
                        class="form-control" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        value="{{ old('price') }}" 
                        required
                        min="0"
                        step="0.01"
                        placeholder="Введите цену">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn w-100" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 6px; border: none;">
                        Создать услугу
                    </button>
                    <a href="{{ route('admin.services') }}" class="btn btn-light w-100" style="font-size: 1rem; border-radius: 6px; border: 1px solid #ced4da;">
                        Отмена
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
