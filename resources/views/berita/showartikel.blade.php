@extends('welcome')

@section('content')

<h1>Daftar artikel</h1>

	<h1>{{ $artikel->judul}}</h1>
	<p>{{ $artikel->isi }}</p>

@stop