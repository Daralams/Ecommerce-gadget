@extends('layouts.main')
@section('container')
<h1>Halaman Home</h1>
<img src={{$image}} width="200" class="img-thumbnail rounded-circle" alt={{$image}}>
<h2>Nama : {{ $name }}</h2>
<h2>Email : {{ $email }}</h2>
@endsection