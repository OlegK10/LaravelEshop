<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="font-default">
    <header>
        @if (isAdmin())
            @include('Admin.Panel.AdminPanel')
        @endif

        @include('Components.Menu')
    </header>

    @yield('content')


    @auth
        @vite('resources/js/admin.js')
    @endauth
    @vite('resources/js/front.js')
</body>

</html>
