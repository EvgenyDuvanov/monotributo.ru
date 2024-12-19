@extends('layouts.base')

@section('content')

<div class="fade-in-section">
    <div class="container my-5">
    <h1 class="text-center mb-4">Отзывы клиентов</h1>
    <div class="row justify-content-center">
        @foreach($reviews as $review)
            <div class="col-md-6 mb-4">
                <div class="review-card" 
                     style="background-color: #f0f0f0; border-radius: 15px; padding: 20px; min-height: 250px; display: flex; flex-direction: column;">
                    <div class="review-photo mb-3 mx-auto">
                        <img src="{{ asset('images/reviews/' . $review->photo) }}" 
                             class="rounded-circle img-fluid" 
                             alt="{{ $review->name }}">
                    </div>
                    <div class="review-content d-flex flex-column justify-content-center" style="flex-grow: 1;">
                        <h5 class="review-name">{{ $review->name }}</h5>
                        <p class="review-text text-muted">{{ $review->review }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="/#rewiew" class="btn mb-2" style="background-color: transparent; color: #0dbdfd; font-size: 1rem; border-radius: 1.5rem; border: 2px solid #0dbdfd; padding: 0.5rem 1rem; text-align: center;">Вернуться назад</a>
        <a href="#" class="btn mb-2" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 1.5rem; border: none; padding: 0.5rem 1rem; text-align: center;">Хочу оставить свой отзыв!</a>
    </div>
</div>

<div class="back-grey">
    <section id="contacts">
        @include('block.contacts')
    </section>
<div>

<style>
.review-card {
display: flex;
flex-direction: column;
background-color: #f0f0f0;
border-radius: 15px;
padding: 20px;
min-height: 250px;
}

.review-content {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}
</style>
@endsection
