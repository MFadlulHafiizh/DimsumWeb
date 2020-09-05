<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/fontawesome/css/all.min.css')}}">
    @yield('style')

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="item/ico_nav_flat.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav text-dark mr-auto">
            <li class="nav-item test">
                <a class="nav-link font-weight-bolder @yield('introduction')" href="{{ url('/') }}">INTRODUCTION 
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bolder @yield('produk') pb-2 ml-2" href="{{url('/produk')}}">PRODUK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bolder @yield('help') pb-2  ml-2" href="#">HELP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bolder @yield('about') pb-2  ml-2" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bolder @yield('contact') pb-2  ml-2" href="#">CONTACT</a>
            </li>

        </ul>
    </div>
    </nav>
    @yield('container')

    <script src="{{URL::asset('/assets/bootstrap/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('/assets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/assets/bootstrap/js/bootstrap.js')}}"></script>
    @yield('script')
</body>
</html>