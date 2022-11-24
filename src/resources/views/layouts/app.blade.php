<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        body {
            margin: 0;
            padding: 0;
            min-width: 100vh;
            min-height: 100vh;
            background: linear-gradient(to bottom right, #223C69, #0F1827); 
        }
    </style>
    
    <title>Document</title>
</head>
<body>
    <livewire:header />
    <livewire:navigation />
    
    {{ $slot }}

    @livewireScripts
</body>
</html>