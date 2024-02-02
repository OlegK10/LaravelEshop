<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="flex">
        <aside class="w-64 fixed h-screen bg-theme-1 shadow-r p-4">
            @include('Admin.Menu.Menu')
        </aside>
        <section class="ml-64 p-4">
            @yield('content')
        </section>
    </div>
</body>

@vite('resources/js/admin.js')
</html>
