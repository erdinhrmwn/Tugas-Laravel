@extends('layouts.home')
@section('content')
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
        <label>Email</label>
        <input type="email" name="email" placeholder="Email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</div>
@endsection
