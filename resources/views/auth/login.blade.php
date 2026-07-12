@extends('layouts.auth')
@section('title','Login')
@section('content')
<h1>Login</h1>
@if(session('login-error'))<p>{{ session('login-error') }}</p>@endif
<form method="POST" action="{{ route('login') }}">@csrf
<label>Email <input type="email" name="email" value="{{ old('email') }}" required></label><br><br>
<label>Password <input type="password" name="password" required></label><br><br>
<label><input type="checkbox" name="remember"> Ingat saya</label><br><br>
<button type="submit">Masuk</button> <a href="{{ route('register') }}">Daftar</a>
</form>
@endsection
