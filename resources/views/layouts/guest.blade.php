<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('description')">

        <title>{{ config('app.name', 'Basile Leroy') }} - @yield("title", '')</title>

        {{-- Icons --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- API's --}}
        <script src="https://www.google.com/recaptcha/api.js"></script>


        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        
    </head>
    <body>
        <x-header />

        <main>
            {{ $slot }}
        </main>

        <x-footer />

        @stack('scripts')
    </body>
</html>
