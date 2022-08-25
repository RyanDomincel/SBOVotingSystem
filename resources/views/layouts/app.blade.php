<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}" />
    <!----css3---->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    {{-- Particle JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/particles.js') }}"></script>



</head>

<body>
    <div id="particles-js"></div>
    <div class="main-content">
        @yield('content')
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    {{-- <script src="{{ asset('js/particlejs/particle.js') }}"></script>
    <script src="{{ asset('js/particlejs/app.js') }}"></script> --}}


</body>

</html>
