<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sebesvíz VUE</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="assets/front/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"  href="assets/front/css/front.css">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


@if(Request::path() === '/')
    @include('front/main/navigation_index', [])
@else
    @include('front/common/navigation', [])
@endif

@yield('content')

@include('front/main/footer', [])



<script type="text/javascript" src="/assets/front/js/plugins.js"></script>


</body>
</html>
