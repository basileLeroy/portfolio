<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Meta Cards - Default --}}
        <meta name="author" content="Basile Leroy">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="Basile Leroy, Portfolio, website, about, contact, projects, SEO, Social Media, Meta">

        {{-- Meta Cards - OpenGraph --}}
        <meta property="og:title" content="{{ config('app.name', 'Basile Leroy') }} - @yield('title', '')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:image" content={{ asset("storage/meta-og.webp") }}>
        <meta property="og:url" content="https://basileleroy.com">
        <meta property="og:type" content="website">

        {{-- Meta Cards - Twitter --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ config('app.name', 'Basile Leroy') }} - @yield('title', '')">
        <meta name="twitter:description" content="@yield('description')">
        <meta name="twitter:image" content={{ asset("storage/meta-twitter.webp") }}>

        {{-- Favicon, Canonical link & Page Title --}}
        <link rel="icon" href={{ asset("storage/logo.ico") }} type="image/x-icon">
        <link rel="canonical" href="{{ url()->current() }}" />
        <title>{{ config('app.name', 'Basile Leroy') }} - @yield("title", '')</title>

        {{-- Icons --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
        <link rel="preload" as="style" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

        {{-- API's --}}
        @stack('api')
        
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
