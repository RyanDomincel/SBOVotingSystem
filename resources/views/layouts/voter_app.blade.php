<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Montserrat:wght@300;400;600&display=swap"
        rel="stylesheet">

    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}" />
    <!----css3---->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    {{-- <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <style>
        .header {
            background-size: cover;
            min-height: 100vh;
            position: relative;
            color: #0D3376;
            /* text-shadow: 2px 2px 2px white; */
        }

        .text1 {
            font-size: 4rem;
        }

        .color-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .container2 {
            background-color: white;
        }

        .box1 {
            display: block;
        }

        @media only screen and (max-width: 600px) {

            .container1 {
                background-size: cover;
            }

            .box1 {
                border: 1px solid black;
                padding: 2px;
            }

            .text {
                font-size: calc(1.0rem + 3.3vw);
            }

            .btn {
                font-size: 80%;
            }
        }
    </style>
</head>


<body class=" ">
    <div class="">
        @yield('content')
    </div>
</body>

</html>
