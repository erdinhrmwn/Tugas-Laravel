<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Database</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            font-size: 30px;
            color: #fff;
            text-transform: capitalize;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            table-layout: fixed;
        }

        .tbl-header {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .tbl-content {
            height: 300px;
            overflow-x: auto;
            margin-top: 0px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        th {
            padding: 20px 15px;
            text-align: center;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
        }

        td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
            font-weight: 300;
            font-size: 12px;
            color: #fff;
            border-bottom: solid 1px rgba(255, 255, 255, 0.1);
        }

        td:last-child,
        th:last-child {
            width: 300px;
        }


        /* demo styles */

        @import url(https://fonts.googleapis.com/css?family=Quicksand);
        body {
            background: -webkit-linear-gradient(left, #5996e5, #af47d8);
            background: linear-gradient(to right, #5996e5, #af47d8);
            font-family: 'Quicksand', sans-serif;
        }

        section {
            margin: 20px;
        }


        /* follow me template */

        .made-with-love {
            margin-top: 40px;
            padding: 10px;
            clear: left;
            text-align: center;
            font-size: 10px;
            font-family: arial;
            color: #fff;
        }

        .made-with-love i {
            font-style: normal;
            color: #F50057;
            font-size: 14px;
            position: relative;
            top: 2px;
        }

        .made-with-love a {
            color: #fff;
            text-decoration: none;
        }

        .made-with-love a:hover {
            text-decoration: underline;
        }


        /* for custom scrollbar for webkit browser*/

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        button {
            outline: none;
            height: 40px;
            text-align: center;
            width: 40px;
            border-radius: 40px;
            background: rgba(0, 0, 0, 0);
            border: 2px solid #1ECD97;
            color: #1ECD97;
            letter-spacing: 1px;
            text-shadow: 0;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        button:hover {
            color: white;
            background: #1ECD97;
        }

        button:active {
            letter-spacing: 2px;
            background: rgba(0, 0, 0, 0);
            border: 2px solid #1ECD97;
            color: #1ECD97;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <section>
            <h1>Database Pembeli</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Erdin</td>
                            <td>erdinhermawann@gmail.com</td>
                            <td>Jalanan</td>
                            <td>Baju</td>
                            <td>40000</td>
                            <td>2</td>
                            <td>
                                <button id="add"><i class="fas fa-user-plus"></i></button>
                                <button id="edit"><i class="far fa-edit"></i></button>
                                <button id="delete"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>


        <!-- follow me template -->
        <div class="made-with-love">
            Made with
            <i>♥</i> by
            <a target="_blank" href="https://fb.me/zuck">Erdin Hermawan</a>
        </div>
    </div>
</body>
<script>
    $("#add").on("click", function(e){
		 e.preventDefault();
    // var id = $("input[name=id]").val();
    $(location).attr('href', '/add')
    });
    $("#edit").on("click", function(e){
		 e.preventDefault();
    var id = $(this).parent().siblings(":first").text();
    $(location).attr('href', '/edit/'+id);
    });
    $("#delete").on("click", function(e){
		 e.preventDefault();
    var id = $(this).parent().siblings(":first").text();
    $(location).attr('href', '/delete/'+id);
    });

</script>

</html>
