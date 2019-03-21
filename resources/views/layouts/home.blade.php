<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Login</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<style>
    .top-right {
        padding: 10px;
        position: static;
        right: 10px;
        top: 18px;
    }

    .top-right>a {
        padding: 5px;
        border: 1px solid #fff;
    }

    .top-right>a:hover {
        border: 1px solid #af47d8;
    }

    .content {
        height: 600px;
        text-align: center;
    }
</style>

<body>
    <div class="wrapper">
    @include('header')
        <div class="content">
            @yield('content')
            <h1>Welcome :)</h1>
        </div>
    @include('footer')
    </div>
</body>

</html>
