@extends('layouts.base')

@section('content')

<div class="back-grey">
    <section class="fade-in-section" id="main">
        @include('block.main')
    </section>
</div>

<div class="fade-in-section">
    <section id="advantages">
        @include('block.advantages')
    </section>
</div>

<div class="back-grey">
    <section class="fade-in-section" id="services">
        @include('block.services')
    </section>
</div>

<div class="fade-in-section">
    <section id="contacts">
        @include('block.contacts')
    </section>
<div>

<div class="back-grey">
    <section class="fade-in-section" id="combo">
        @include('block.combo')
    </section>
</div>

<div class="fade-in-section">
    <section id="rewiew">
        @include('block.rewiew')
    </section>
</div>

<div class="back-grey p-4">
    <section class="fade-in-section" id="application">
        @include('block.application')
    </section>
</div>

@endsection
