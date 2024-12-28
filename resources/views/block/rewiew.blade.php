<div class="container my-5">
    <h1 class="text-center mb-4">Отзывы клиентов</h1>
    <div class="row justify-content-center">
        @foreach($reviews as $review)
            <div class="col-md-6 mb-4 d-flex align-items-stretch">
                <div class="review-card text-center p-4" style="background-color: #f0f0f0; border-radius: 15px;">
                    <div class="review-photo mb-3 mx-auto">
                        <img src="{{ asset('images/reviews/' . $review->photo) }}" class="rounded-circle img-fluid" alt="{{ $review->name }}">
                    </div>
                   
                    <h5 class="review-name">{{ $review->name }}</h5>
                    <p class="review-text text-muted">{{ $review->review }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('reviews.create') }}" class="btn mb-2" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 1.5rem; border: none; padding: 0.5rem 1rem; text-align: center;">Оставить отзыв!</a>
        <a href="{{ route('reviews.index') }}" class="btn mb-2" style="background-color: transparent; color: #0dbdfd; font-size: 1rem; border-radius: 1.5rem; border: 2px solid #0dbdfd; padding: 0.5rem 1rem; text-align: center;">Перейти ко всем отзывам</a>
    </div>
</div>
