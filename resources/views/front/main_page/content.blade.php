@extends('front.layouts.web_layout')
@section('content')
    <!-- Header -->
    <header id="header">
        @include('front/main_page/index_carousel', [])
    </header>
    recommendation1-section
    @include('front/main_page/about', [])
    @include('front/main_page/ribbon2', [])
    @include('front/main_page/accommodation', [])
    {{--@include('front/main_page/test', [])--}}
    @include('front/main_page/ribbon1', [])
    @include('front/main_page/recommendation', [])
    @include('front/main_page/recommendation2', [])
    @include('front/main_page/price', [])
    @include('front/main_page/contact', [])

@endsection

@section('sub_js')
<script>

</script>
@endsection
