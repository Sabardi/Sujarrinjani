<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        .video-iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 90%;
            /* Adjust as needed to zoom in */
            height: 110%;
            /* Adjust as needed to zoom in */
            transform: translate(-50%, -50%) scale(1.2);
            /* Center and zoom */
            object-fit: cover;
            /* Ensure video covers the container */
        }
    </style>
    <!-- Scripts -->
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    --}}
    {{--
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" /> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
        @include('layouts.nav')

        <!-- Page Heading -->
        @isset($header)
        {{-- <header class="bg-white shadow dark:bg-gray-800">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8"> --}}
                {{ $header }}
                {{-- </div>
        </header> --}}
        @endisset

        <!-- Page Content -->
        <main class="flex flex-col items-center justify-center w-full px-12 mx-auto lg:w-4/5">
            {{-- @yield('content') --}}
            {{$slot}}
        </main>
    </div>
</body>

</html>