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

<body>
    <div class="wrapper">
        <div class="container">
            <h1> Login User </h1>
            @if(\Session::has('alert'))
            <div class="alert alert-danger">
                <div>{{ Session::get('alert') }}</div>
            </div>
            @endif @if(\Session::has('alert-success'))
            <div class="alert alert-success">
                <div>{{ Session::get('alert-success') }}</div>
            </div>
            @endif
            <form action="{{ url('/loginPost') }}" method="post">
                {!! csrf_field() !!}
                <label>Username</label>
                <input type="email" name="email" placeholder="Email">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>

                <h4><a href="{{ url('/register') }}">Register</a></h4>
            </form>

        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
<script>
    $( document ).ready(function() {
    $("form").on("submit", function(e) {
    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
    $("h1").text("Please wait...");

    // alert(JSON.stringify(data));
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var email = $('input[name=email]').val();
    var password = $('input[name=password]').val();
    if (email == null || password == null){
        alert('Data tidak boleh kosong');
    }else{
    formData = {
            '_token': CSRF_TOKEN,
            'name': nama,
            'email': email,
            'password': password,
        }
    $.ajax({
        url         : 'add/store',
        dataType    : 'json',
        type        : 'post',
        contentType : 'application/json',
        encode      : true,
        data        : formData
        ).done(function(data) {
            $("h1").text("Success add user...");
            setTimeout(function(){
                $(location).attr('href', '/');
            }, 3000);
        }
    });
}
    e.preventDefault();
});
});

</script>

</html>
