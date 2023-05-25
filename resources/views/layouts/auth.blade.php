<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div x-data="{ sidebarOpen: false }" class="relative text-gray-800 bg-white font-roboto">
        <main class="flex items-center flex-1 min-h-screen px-8 py-6 bg-white pattern">
            @yield('body')
        </main>
    </div>
</body>
</html>
