<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet preload" as="style" type="text/css" media="screen" href="{{url('/css/app.css')}}" /> --}}
    <link rel="stylesheet" href="{{ mix('/css/' . View::getSection('file') . '.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/global.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/header.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/footer.css') }}" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/css/owl.theme.default.min.css" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

</head>

<body>
    <div class="wrapper @yield('page')">
        @section('header')
        @include('layouts.app.header')
        @show
        @yield('content')
        @section('footer')
        @include('layouts.app.footer')
        @show
    </div>
</body>
<script>@yield('script')</script>
<script rel="preload" as="script" src="{{url('js/app.js')}}" async></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>@yield('script')</script>
</html>
