<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vote C') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 text-sm">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#">SUMMER SUNSET logo</a>
    <div class="flex items-center">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img
                src="https://secure.gravatar.com/avatar/1ad9895520cab3bec5d2bcfcb09da540?size=80&default=wavatar&rating=g"
                alt="avatar" class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>
</body>
</html>
