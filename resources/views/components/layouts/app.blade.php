<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/js/app.js')
    </head>
    <body class="flex flex-col min-h-screen dark:bg-slate-900">
        <livewire:header />
        <div class="container mx-auto pt-4 flex-grow max-w-screen-xl px-4 lg:px-6 py-2.5 font-sans">
            {{ $slot ?? '' }}
        </div>
        <livewire:footer />
    </body>
</html>
