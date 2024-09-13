@extends('layouts.base')

@section('content')
<div class="container ">
    <h1 class="text-center mb-4">Услуги</h1>
    <div class="row">
        @foreach($services as $service)
            <div class="col-md-3 mb-4 d-flex align-items-stretch">
                <div class="service-card text-center p-3">
                    <div class="service-icon mb-3">
                        {!! $service->svg_image !!}
                    </div>
                    <h5 class="service-name">{{ $service->name }}</h5>
                    <p class="service-description text-muted">{{ $service->description }}</p>
                    <a href="{{ route('services.show', $service->id) }}" class="btn btn-outline-info rounded-pill">Подробнее</a>
                </div>
            </div>
        @endforeach
        <div class="p-3">
            <a href="{{ url('/') }}" class="btn btn-outline-info rounded-pill">Назад на главную страницу</a>
        </div>
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