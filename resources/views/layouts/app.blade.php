<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="relative flex items-top d-flex justify-content-end min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden flex justify-content-end fixed top-0 right-0 px-6 py-4 ">
                @auth
                    <a href="{{ url('/items') }}" class=" mr-4 text-sm text-secondary underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class=" mr-4 text-sm text-secondary underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="mr-4 text-sm text-secondary underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
