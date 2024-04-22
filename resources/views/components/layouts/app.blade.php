<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
    </head>
    <body>
        <livewire:header />
        {{-- <aside><h3>That's my aside</h3></aside> --}}
        <div class="container">
            {{ $slot ?? '' }}
        </div>
        <livewire:footer />
    </body>
</html>
