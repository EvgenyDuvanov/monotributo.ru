<div class="container my-5">
    <h1 class="text-center mb-4">Комплексные пакеты</h1>
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
                    <a href="/#contacts" class="btn" style="background-color: #0dbdfd; color: white; font-size: 1rem; border-radius: 1.5rem; border: none; padding: 0.5rem 1rem; text-align: center;">Получить услугу</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
