<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Livewire</title>
    @livewireStyles
</head>
<body>
    <div class="container mx-auto bg-gray-200">
        <h1>Livewire Tutorial</h1>
        <livewire:posts />
    </div>
    @livewireScripts
</body>
</html>