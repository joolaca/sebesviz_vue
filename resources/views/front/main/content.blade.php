@extends('front.layouts.web_layout')
@section('content')
    <!-- Header -->
    <header id="header">
        @include('front/main/index_carousel', [])
    </header>

    @include('front/main/about', [])
    @include('front/main/ribbon2', [])
    @include('front/main/accommodation', [])
    {{--@include('front/main/test', [])--}}
    @include('front/main/ribbon1', [])
    @include('front/main/recommendation', [])
    @include('front/main/recommendation2', [])
    @include('front/main/price', [])
    @include('front/main/contact', [])

@endsection
