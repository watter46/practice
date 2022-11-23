<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to bottom right, #223C69, #0F1827); 
            }
        </style>
    </head>
    <body class="h-screen">

        <livewire:css />
        {{-- <livewire:header />
        <livewire:navigation />
        <livewire:tasks /> --}}

        @livewireScripts
    </body>
</html>
