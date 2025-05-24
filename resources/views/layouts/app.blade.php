<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <livewire:styles />
    <livewire:scripts />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/fontawesome/css/all.css'])
</head>
<body>
    <div id="app">

        <livewire:navbar />

        <main class="py-4">
            @yield('content')
            @include('layouts.footer')
        </main>
    </div>
</body>
</html>
