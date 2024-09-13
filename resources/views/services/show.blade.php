@extends('layouts.base')

@section('content')
<div class="container my-3">
    <div class="service-detail mx-auto text-center" style="max-width: 600px;">
        <div class="mb-4">
            <div class="service-icon mb-3">
                {!! $service->svg_image !!}
            </div>
            <h2 class="service-name">{{ $service->name }}</h2>
            <p class="service-description">{{ $service->info }}</p>
        </div>
        {{-- <div class="service-additional-description mb-4">
            <h4>Дополнительное описание</h4>
            <p>{{ $service->additional_description }}</p>
        </div> --}}
        <div class="service-price mb-4">
            <h5>от {{ number_format($service->price, 0) }} $ за услугу</h5>
        </div>
        <div>
            <a href="{{ route('applications.create', ['service_id' => $service->id]) }}" class="btn btn-success rounded-pill mb-3">Получить услугу!</a>
        </div>
        <a href="{{ route('services.index') }}" class="btn btn-outline-info rounded-pill">Назад ко всем услугам</a>
    </div>
</div>




<div>
    <div class="back-grey p-4">
        <div class="container p-4">
            <section id="application">
                @include('block.application')
            </section>
        </div>
    </div>
</div>
@endsection
