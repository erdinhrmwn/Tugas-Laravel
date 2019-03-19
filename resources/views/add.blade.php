<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Database</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'Source Sans Pro';
            font-style: normal;
            font-weight: 200;
            src: local('Source Sans Pro ExtraLight'), local('SourceSansPro-ExtraLight'), url(https://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_wlxdr.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Source Sans Pro';
            font-style: normal;
            font-weight: 300;
            src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v11/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdr.ttf) format('truetype');
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-weight: 300;
        }

        body {
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
            background: -webkit-linear-gradient(left, #5996e5, #af47d8);
            background: linear-gradient(to right, #5996e5, #af47d8);
        }

        body ::-webkit-input-placeholder {
            /* WebKit browsers */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }

        body :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            opacity: 1;
            font-weight: 300;
        }

        body ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            opacity: 1;
            font-weight: 300;
        }

        body :-ms-input-placeholder {
            /* Internet Explorer 10+ */
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }

        .wrapper {
            background: -webkit-linear-gradient(left, #5996e5, #af47d8);
            background: linear-gradient(to right, #5996e5, #af47d8);
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .wrapper.form-success .container h1 {
            -webkit-transform: translateY(85px);
            transform: translateY(85px);
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 80px 0;
            height: 400px;
            text-align: center;
        }

        .container h1 {
            font-size: 40px;
            transition-duration: 1s;
            transition-timing-function: ease-in-put;
            font-weight: 200;
        }

        form {
            padding: 20px 0;
            position: relative;
            z-index: 2;
        }

        form input,
        form select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: 0;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background-color: rgba(255, 255, 255, 0.2);
            width: 250px;
            border-radius: 3px;
            padding: 10px 15px;
            margin: 0 auto 10px auto;
            display: block;
            text-align: center;
            font-size: 18px;
            color: white;
            transition-duration: 0.25s;
            font-weight: 300;
        }

        form input:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }

        form input:focus,
        form select:hover,
        form select:focus {
            background-color: white;
            width: 300px;
            color: #af47d8;
        }

        form button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: 0;
            background-color: white;
            border: 0;
            padding: 10px 15px;
            color: #af47d8;
            border-radius: 3px;
            width: 250px;
            cursor: pointer;
            font-size: 18px;
            transition-duration: 0.25s;
            border: 1px solid #af47d8;
            text-transform: capitalize;
        }

        form button:hover {
            color: #f5f7f9;
            border: 1px solid #f5f7f9;
            background-color: rgba(255, 255, 255, 0);
        }

        .bg-bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .bg-bubbles li {
            position: absolute;
            list-style: none;
            display: block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.15);
            bottom: -160px;
            -webkit-animation: square 25s infinite;
            animation: square 25s infinite;
            transition-timing-function: linear;
        }

        .bg-bubbles li:nth-child(1) {
            left: 10%;
        }

        .bg-bubbles li:nth-child(2) {
            left: 20%;
            width: 80px;
            height: 80px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 17s;
            animation-duration: 17s;
        }

        .bg-bubbles li:nth-child(3) {
            left: 25%;
            -webkit-animation-delay: 4s;
            animation-delay: 4s;
        }

        .bg-bubbles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            -webkit-animation-duration: 22s;
            animation-duration: 22s;
            background-color: rgba(255, 255, 255, 0.25);
        }

        .bg-bubbles li:nth-child(5) {
            left: 70%;
        }

        .bg-bubbles li:nth-child(6) {
            left: 80%;
            width: 120px;
            height: 120px;
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .bg-bubbles li:nth-child(7) {
            left: 32%;
            width: 160px;
            height: 160px;
            -webkit-animation-delay: 7s;
            animation-delay: 7s;
        }

        .bg-bubbles li:nth-child(8) {
            left: 55%;
            width: 20px;
            height: 20px;
            -webkit-animation-delay: 15s;
            animation-delay: 15s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
        }

        .bg-bubbles li:nth-child(9) {
            left: 25%;
            width: 10px;
            height: 10px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .bg-bubbles li:nth-child(10) {
            left: 90%;
            width: 160px;
            height: 160px;
            -webkit-animation-delay: 11s;
            animation-delay: 11s;
        }

        a {
            text-transform: uppercase;
            color: #af47d8;
            text-decoration: none;
        }

        @-webkit-keyframes square {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-700px) rotate(600deg);
                transform: translateY(-700px) rotate(600deg);
            }
        }

        @keyframes square {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            100% {
                -webkit-transform: translateY(-700px) rotate(600deg);
                transform: translateY(-700px) rotate(600deg);
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1> Add User </h1>
            <form class="form" action="add/store" method="POST">
                {!! csrf_field() !!}
                <input type="text" name="nama" placeholder="Nama">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="text" name="alamat" placeholder="Alamat">
                <input type="text" name="nama_barang" placeholder="Nama Barang">
                <input type="text" name="harga_barang" placeholder="Harga Barang">
                <input type="text" name="jumlah_barang" placeholder="Jumlah Barang">
                <button type="submit" id="add">Add</button>
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
    $("form").on("submit", function(e) {
    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
    $("h1").text("Please wait...");

    // alert(JSON.stringify(data));
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var nama = $('input[name=nama]').val();
    var email = $('input[name=email]').val();
    var password = $('input[name=password]').val();
    var alamat = $('input[name=alamat]').val();
    var nama_barang = $('input[name=nama_barang]').val();
    var harga_barang = $('input[name=harga_barang]').val();
    var jumlah_barang = $('input[name=jumlah_barang]').val();
    formData = {
            '_token': CSRF_TOKEN,
            'nama': nama,
            'email': email,
            'password': password,
            'alamat': alamat,
            'nama_barang': nama_barang,
            'harga_barang': harga_barang,
            'jumlah_barang': jumlah_barang
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
            $(location).attr('href', '/');
        }
    });

    e.preventDefault();
});

</script>

</html>
