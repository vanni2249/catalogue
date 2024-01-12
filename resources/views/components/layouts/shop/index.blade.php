<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="flex flex-col min-h-screen">
    <nav class="h-14 w-full z-10 bg-slate-800">
        <x-layouts.shop.navbar></x-layouts.shop.navbar>
    </nav>
    <main class="flex-grow">
        <div class="container mx-auto">
            {{$slot}}
        </div>
    </main>
    <footer>Footer</footer>
</body>
@stack('js')
@livewireScripts
</html>