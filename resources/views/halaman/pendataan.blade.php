@extends('layout.master')
@section('judul')
Ini Halaman Utama
@endsection
@section('content')
    <form action="/kirim" method="post">
        @csrf
        <label>Nama Lengkap</label> <br>
        <input type="text" name="Nama"><br><br>
        <label>Alamat</label><br>
        <textarea name="Alamat" cols="30" rows="10"></textarea> <br><br>
        <input type="submit" value="kirim">
    </form>
@endsection
