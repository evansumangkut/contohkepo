@extends('welcome')

@section('content')

<h1>Daftar berita</h1>

	<h1>{{ $berita->judul}}</h1>
	<p>{!! $berita->isi !!}</p>

@stop