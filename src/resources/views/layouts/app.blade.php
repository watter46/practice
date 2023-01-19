<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
	@vite(['resources/css/Header/header.css', 'resources/js/functional/Header/header.js'])
    @vite(['resources/css/Tasks/Editor/editor.css', 'resources/js/functional/Tasks/Editor/editor.js'])
	@vite(['resources/js/functional/Tasks/tasks.js'])
	@vite(['resources/css/Tasks/tasklist.css', 'resources/js/functional/Tasks/taskList.js'])
    @livewireStyles
    
    <title>Document</title>
</head>
<body>
    <livewire:header />
    <livewire:navigation />
    
    {{ $slot }}

    @livewireScripts
</body>
</html>