<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
</head>
<body class="overflow-hidden">
    <div x-data="{ sidebarOpen: false }" class="relative flex h-screen text-gray-800 bg-white font-roboto">
        @include('components.sidebar')

        <div class="flex flex-col flex-1 overflow-hidden bg-gray-100">
            @include('components.header')

            <main class="flex-1 overflow-y-auto">
                <div class="px-4 py-8 sm:px-6">
                    <div>
                        <h1 class="text-2xl font-medium text-gray-700 sm:text-3xl">@stack('title')</h1>

                        <div class="hidden mt-3 overflow-y-auto text-sm lg:items-center lg:flex whitespace-nowrap">
                            <a href="#" class="text-gray-600 hover:underline">
                                Pages
                            </a>

                            <span class="mx-1 text-gray-500">
                                /
                            </span>

                            <a href="#" class="text-indigo-600 hover:underline">
                                @stack('title')
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        @yield('body')
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
