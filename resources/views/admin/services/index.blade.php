@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Управление услугами</h2>
        <a href="{{ route('admin.services.create') }}" class="btn d-flex align-items-center" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 1.5rem; border: none; padding: 0.5rem 1rem; text-align: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16" style="margin-right: 2px;">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
            Создать услугу
        </a>
    </div>
    <div class="row">
        @foreach($services as $service)
            <div class="col-md-4 mb-4">
                <div class="service-card text-center p-4" style="background-color: #f0f0f0; border-radius: 15px;">
                    <h5 class="service-title">{{ $service->name }}</h5>
                    <p class="mt-2 px-3">{{ $service->info }}</p>
                    <p class="text-muted">от {{ number_format($service->price, 0) }} $ за услугу</p>
                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn mt-3" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 1.5rem; border: none; padding: 0.5rem 1rem; text-align: center;">Редактировать</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
