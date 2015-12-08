@extends('admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in! {{ Auth::user()->name }}
				</div>
				<a href="{{ url('auth/logout') }}">Logout</a>
			</div>
		</div>
	</div>
</div>
@endsection
