 <div class="container my-5">
        <h1 class="text-center mb-4">Наши услуги</h1>
    <div class="row">
        @foreach($services as $service)
            <div class="col-md-4 mb-4">
                <div class="service-card text-center p-5">
                    <h5 class="service-title">{{ $service->name }}</h5>
                    <p style="mt-1 padding: 0 40px;">{{ $service->info }}</p>
                    <p>от {{ number_format($service->price, 0) }} $ за услугу</p> 
                </div>
            </div>
        @endforeach
    </div>
</div>
