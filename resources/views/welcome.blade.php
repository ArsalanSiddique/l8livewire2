<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 Livewire 2 </title>
    @livewireStyles
</head>
<body>
    
    <h1 style="text-align: center;">This is Laravel 8 with Livewire 2</h1>

    @livewire('home', ['name' => 'Arsalan Ahmed'])
    @livewire('mobile')

    @livewireScripts
</body>
</html>