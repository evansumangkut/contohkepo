@extends('welcome')

@section('content')

	@if ($first == 'Evan')
	<h1>Hy Evan</h1>
@else
	<h1>orang lain</h1>
@endif
<br/>
<br/>

@if(Session::has('pesan'))
<h3>{{Session::get('pesan') }}</h3>
<br/>
@endif

@foreach($artikel as $daftar)

<h1><a href="{{ route('tampilprofil', $daftar->slug) }}">{{ $daftar->judul }}</a></h1>
<p>{!! $daftar->isi !!}</p>
 
<a href="{{ route('editartikel', $daftar->slug) }}">Edit</a>

<form method="POST" action="{{route('hapusartikel', $daftar->slug)}}" accept-charset="UTF-8" style="margin:0 auto">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                                        <input id="confirm" class="btn btn-danger" data-toggle="confirmation" data-popout="true" type="submit" value="Hapus">
</form>

@endforeach

<h1>Halaman Profil</h1>

@stop
