@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>
    <h1>{{$name}}</h1>
    <p>{{ $email }}</p>
    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200">
  @endsection