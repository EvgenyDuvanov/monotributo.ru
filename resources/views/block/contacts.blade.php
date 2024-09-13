<div class="container p-4">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 my-2">
            <h3 class="p-3">Как с нами связаться? Легко!</h3>
            <p style="font-size: 1rem; color: #6c757d; text-align: center; padding: 0 60px;">
                Свяжитесь с нами удобным для вас способом, что бы получить услугу или консультацию, либо оставьте заявку и мы с вами свяжемся
            </p>
            <div class="row justify-content-center align-items-center">
                <div class="d-flex flex-wrap justify-content-center">
                    @foreach($contacts as $contact)
                        <div class="contact-card mx-2">
                            <a href="{{ $contact->link }}" class="contact-card-link">
                                <div class="contact-icon mx-auto">
                                    {!! $contact->svg_code !!}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-md-4">
            @include('block.form')
        </div>
    </div>
</div>