@extends('welcome')

@section('content')

{!! Form::open(['url' => 'berita']) !!}
		<div class="form-group">
			{!! Form::label('judul', 'judul:') !!}
			{!! Form::text('judul', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Body Form Input -->
		<div class="form-group">
			{!! Form::label('isi', 'isi:') !!}
			{!! Form::textarea('isi', null, ['class' => 'ckeditor']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add Berita', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
@stop