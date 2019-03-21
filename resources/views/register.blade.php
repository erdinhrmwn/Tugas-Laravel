@extends('layouts.home')
@section('content')
<div class="container">
    <h1> Register User </h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul type="none">
            @foreach ($errors->all() as $error)
            <pre>{{ $error }}</pre> @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ url('/registerPost') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label>
        <input type="text" name="name" placeholder="Nama">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <label>Password Confirmation</label>
        <input type="password" name="confirmation" placeholder="Password Confirmation">
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
