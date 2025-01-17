<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        {{-- navbar included  --}}
        @include('include.nav')

        {{-- content body here  --}}
        <div class="my-5">
            @yield('content')
        </div>

        {{-- content body end  --}}

        {{-- footer included  --}}
        @include('include.footer',["author" => "Jeshan Tiwari"])
    </body>
</html>
