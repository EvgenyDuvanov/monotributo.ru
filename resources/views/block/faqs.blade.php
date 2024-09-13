<div class="container my-5">
    <h1>Frequently Asked Questions</h1>
    @foreach($faqs as $faq)
        <div class="faq-item mb-4">
            <h3>{{ $faq->question }}</h3>
            <p>{{ $faq->answer }}</p>
            @if($faq->explanation)
                <p><strong>Explanation:</strong> {{ $faq->explanation }}</p>
            @endif
        </div>
    @endforeach
</div>
