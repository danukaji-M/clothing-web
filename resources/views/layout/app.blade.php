<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <header>
        @yield('header')
    </header>
    <div class="conteiner-fluid">
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>
