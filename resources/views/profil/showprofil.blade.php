@extends('welcome')

@section('content')

	@if ($first == 'Evan')
	<h1>Hy Evan</h1>
@else
	<h1>orang lain</h1>
@endif
<br/>
<br/>

<h1>{{ $artikel->judul }}</h1>
<p>{!! $artikel->isi !!}</p>
<img src="{{ asset($artikel->gambar) }}">
 




@stop