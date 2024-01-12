<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    @vite('resources/css/app.css')
    @livewireStyles
    
</head>

<body class="flex">
        <nav class="fixed top-0 h-14 w-full z-10 bg-slate-800">
            <div class="h-full flex flex-col justify-center">
                <x-layouts.admin.navbar />

            </div>
        </nav>
        <aside class="fixed h-screen w-20 left-0 overflow-y-auto overflow-hidden border-r">
          <div class="h-screen pt-16 p-4">
            <x-layouts.admin.sidebar-left />
          </div>
        </aside>
        <main class="flex-grow pl-20 pt-14 pr-64">
            <div class="p-4">
                {{$slot}}

            </div>
        </main>
        <aside class="fixed h-screen w-64 right-0 overflow-y-auto overflow-hidden border-l">
            <div class="h-screen pt-16 p-4">
                <x-layouts.admin.sidebar-right />
            </div>
        </aside>
        @stack('js')
    @livewireScripts
</body>

</html>