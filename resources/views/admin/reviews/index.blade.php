@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Управление отзывами</h2>
        <a href="{{ route('admin.reviews.create') }}" class="btn d-flex align-items-center" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 1.5rem; border: none; padding: 0.5rem 1rem; text-align: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16" style="margin-right: 2px;">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
            Добавить отзыв
        </a>
    </div>
    <div class="row justify-content-center">
        @foreach($reviews as $review)
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="review-card text-center p-4" style="background-color: #f0f0f0; border-radius: 15px;">
                    <div class="review-photo mb-3 mx-auto">
                        @if($review->photo)
                            <img src="{{ asset('images/reviews/' . $review->photo) }}" class="rounded-circle img-fluid" alt="{{ $review->name }}">
                        @else
                            <img src="{{ asset('images/default-avatar.jpg') }}" class="rounded-circle img-fluid" alt="{{ $review->name }}">
                        @endif
                    </div>
                    <h5 class="review-name">{{ $review->name }}</h5>
                    <p class="review-text text-muted">{{ Str::limit($review->review, 100, '...') }}</p>
                    <span class="badge {{ $review->status == 'published' ? 'bg-success' : 'bg-secondary' }}">
                        {{ ucfirst($review->status) }}
                    </span>
                    <div class="mt-3">
                        <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-sm btn-primary" style="background-color: #0dbdfd; border: none;">Редактировать</a>
                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" style="border: none;" onclick="return confirm('Вы уверены, что хотите удалить этот отзыв?')">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $reviews->links() }}
    </div>
</div>
@endsection
