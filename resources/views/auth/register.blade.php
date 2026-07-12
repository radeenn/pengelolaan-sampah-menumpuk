@extends('layouts.auth')
@section('title','Daftar')
@section('content')
<h1>Daftar</h1>
<form method="POST" action="{{ route('register') }}">@csrf
<label>Nama <input name="name" value="{{ old('name') }}" required></label><br><br>
<label>Email <input type="email" name="email" value="{{ old('email') }}" required></label><br><br>
<label>No. HP <input name="nomorhp" value="{{ old('nomorhp') }}" required></label><br><br>
<label>Alamat <textarea name="address" required>{{ old('address') }}</textarea></label><br><br>
<label>Password <input type="password" name="password" required></label><br><br>
<button type="submit">Daftar</button> <a href="{{ route('login') }}">Login</a>
</form>
@endsection
