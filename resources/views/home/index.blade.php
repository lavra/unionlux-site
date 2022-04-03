@extends('layouts.main')
@push('title')
    <title>Unionlux - Válvulas de filtros anti-poluição</title>
    <meta name="description" content="Válvulas Solenoides de filtros anti-poluição" />
@endpush
@section('content')
    @include('header.menu-home')
    @include('home.sliders.slider-1')
    @include('whatsapps.whatsapp-1')
    @include('home._partals.about')
    @include('home._partals.video')
    {{--@include('home._partals.pricing')--}}
    @include('home._partals.subscribe')
    @include('home._partals.contact')
@endsection
{{-- News Sections --}}
{{-- include('home._partals.best') --}}
{{-- include('home._partals.feature') --}}
{{-- include('home._partals.dealofweek') --}}
{{-- include('home._partals.compare') --}}
{{-- include('home._partals.testimonial') --}}
{{-- include('home._partals.faq') --}}

