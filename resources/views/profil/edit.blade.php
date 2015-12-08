 @extends('admin')

@section('content')
	<h1>Write a New Article</h1>

	<hr />

<form action="{{ route('updateartikel', $artikel->slug)}}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_method" value="PATCH">
	<input type="hidden" name="_token" value="{{csrf_token()}}"
	<label>Judul</label>
	<input style="width:600px" name="judul" type="text" value="{{ $artikel->judul }}">
	<br/>
	<label>Isi Berita</label>
	<textarea name="isi"> {!! $artikel->isi !!}</textarea>
	@if($artikel->gambar)
	<img src="{{ asset($artikel->gambar) }}" style="width:200px; height:200px">
	@else
	<h4>Tidak ada gambar!</h4>
	@endif
	<hr>
	<input type="file" name="gambar"><br/>
	<input type="submit" value="update">
</form>

@if(Session::has('error'))
<h3>{{Session::get('error') }}</h3>

@endif
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
@include('extra.tinymce')
@stop