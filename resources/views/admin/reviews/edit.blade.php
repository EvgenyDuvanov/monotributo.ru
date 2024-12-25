@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 fw-semibold" style="font-size: 1.75rem;">Редактировать отзыв</h1>

    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-12">
            <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data" style="background: #ffffff; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px;">
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
                        value="{{ $review->name }}" 
                        required
                        placeholder="Введите имя">
                </div>

                <div class="mb-4">
                    <label for="review" class="form-label" style="font-weight: 500;">Отзыв</label>
                    <textarea 
                        id="review" 
                        name="review" 
                        class="form-control" 
                        style="border: 1px solid #ced4da; border-radius: 6px;" 
                        rows="4" 
                        required
                        placeholder="Введите ваш отзыв">{{ $review->review }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="photo" class="form-label" style="font-weight: 500;">Фото</label>
                    <input 
                        type="file" 
                        id="photo" 
                        name="photo" 
                        class="form-control" 
                        accept="image/*">
                    @if($review->photo)
                        <div class="mt-3">
                            <img src="{{ asset('images/reviews/' . $review->photo) }}" class="rounded-circle img-fluid" alt="{{ $review->name }}" style="width: 100px; height: 100px; object-fit: cover;">
                        </div>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="status" class="form-label" style="font-weight: 500;">Статус</label>
                    <select class="form-select" id="status" name="status" required style="border: 1px solid #ced4da; border-radius: 6px;">
                        <option value="published" {{ $review->status == 'published' ? 'selected' : '' }}>Опубликован</option>
                        <option value="unpublished" {{ $review->status == 'unpublished' ? 'selected' : '' }}>Не опубликован</option>
                    </select>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn w-100" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 6px; border: none;">
                        Сохранить изменения
                    </button>
                    <a href="{{ route('admin.reviews') }}" class="btn btn-light w-100" style="font-size: 1rem; border-radius: 6px; border: 1px solid #ced4da;">
                        Отмена
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
