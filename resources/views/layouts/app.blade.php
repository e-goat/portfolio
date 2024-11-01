<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @filamentStyles
    </head>
    <body class="font-sans antialiased flex flex-col min-h-screen">
        <x-banner />

        @livewire('navigation-menu')

        <!-- Page Content -->
        <main class="container mx-auto flex-grow max-w-screen-xl font-sans">
            {{ $slot }}
        </main>
        <livewire:footer />
        @stack('modals')
        
        @livewireScripts
        @filamentScripts
    </body>
</html>
