@extends('welcome')

@section('content')

<h1>ini halaman komentar</h1>

@foreach($daftarartikel as $artikel)
<h1>{{ $artikel->judul }}</h1>


@if(count($artikel->komen))

@foreach($artikel->komen as $komentar)
<h2>{{ $komentar->isi_komentar }}<h2>
@endforeach

@else
<h3>Tidak ada komentar</h3>
@endif

@endforeach
@stop

