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
<body class="font-sans bg-gray-background text-gray-900 text-sm">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#"><img src="{{ Vite::asset('resources/images/final.svg') }}" alt=""></a>
    <div class="flex items-center">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
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
                src="https://www.gravatar.com/avatar/1ad9895520cab3bec5d2bcfcb09da540?size=200&d=retro"
                alt="avatar" class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>

<main class="container mx-auto flex max-w-custom">
    <div class="w-70 mr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae blanditiis cum in ipsa itaque, magnam modi
        provident saepe totam! Architecto autem consequuntur deserunt eligendi illum quaerat quibusdam quod soluta.
        Quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam consectetur cumque dolorum ducimus exercitationem fuga incidunt ipsa ipsum laudantium minus, nihil nisi pariatur perspiciatis quasi quos soluta suscipit vitae?
    </div>
    <div class="w-175">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (23)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (9)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In Progress (5)</a></li>
            </ul>
            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented (9)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (5)</a></li>
            </ul>
        </nav>

        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>
</main>

</body>
</html>
