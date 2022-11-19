<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="h-screen">
        <livewire:header />
        <livewire:navigation />
        <livewire:tasks />
        {{-- <livewire:css /> --}}

        @livewireScripts
    </body>
</html>
