<div class="container my-5">
    <h1 class="text-center mb-4">Преимущества работы с нами</h1>
    <div class="row">
        @foreach($advantages as $advantage)
            <div class="col-md-4 d-flex justify-content-center align-items-center my-4">
                <div class="text-center">
                    <!-- SVG Icon -->
                    <div class="service-icon">
                        {!! $advantage->svg_image !!}
                    </div>
                    
                    <h3>{{ $advantage->text }}</h3>
                    
                    <p style="font-size: 1,5rem; color: #6c757d; text-align: center;">{{ $advantage->info }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
