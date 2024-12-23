@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Управление пакетами</h2>
    </div>
    <div class="row">
        @foreach($combos as $combo)
            <div class="col-md-4 mb-4">
                <div class="service-card text-center p-5 border rounded">
                    <h3>{{ $combo->name }}</h3>
                    <p class="border-top">
                        <h3>${{ intval($combo->price) == $combo->price ? number_format($combo->price, 0, '.', ',') : number_format($combo->price, 2, '.', ',') }}</h3> за услугу
                    </p>
                    <p class="service-description">
                        <ul class="list-unstyled">
                            @foreach(explode(',', $combo->info) as $item)
                                <p>{{ $item }}</p>
                            @endforeach
                        </ul>
                    </p>
                    <a href="{{ route('admin.combos.edit', ['id' => $combo->id]) }}" class="btn" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 1.5rem; border: none; padding: 0.5rem 1rem; text-align: center;">Редактировать</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection