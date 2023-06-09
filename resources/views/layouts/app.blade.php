<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Welcome')</title>
    @vite('resources/scss/app.scss')
</head>
<body class="bg-dark opacity-100">
    @include('partials.header')

    <main>
        @yield('main')
    </main>

    @include('partials.footer')
</body>
</html>
