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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1> Edit User </h1>
            @foreach ($data as $k)
            <form class="form" action="/update/{{ $k->id }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $k->id }}">
                <input type="text" name="nama" placeholder="Nama" value="{{ $k->nama }}">
                <input type="email" name="email" placeholder="Email" value="{{ $k->email }}">
                <input type="text" name="alamat" placeholder="Alamat" value="{{ $k->alamat }}">
                <input type="text" name="nama_barang" placeholder="Nama Barang" value="{{ $k->nama_barang }}">
                <input type="text" name="harga_barang" placeholder="Harga Barang" value="{{ $k->harga }}">
                <input type="text" name="jumlah_barang" placeholder="Jumlah Barang" value="{{ $k->jumlah }}">
                <button type="submit">Submit</button>
            </form>
            @endforeach
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
    var id = $('input[name=id]').val();
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
        url: '/update/'+id,
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',
        encode      : true,
        data: formData )
        .done(function(data) {
            $("h1").text("Success edit user...");
            $(location).attr('href', '/');
        }
    });

    e.preventDefault();
});

</script>

</html>
