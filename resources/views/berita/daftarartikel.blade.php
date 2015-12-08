@extends('welcome')

@section('content')

<h1>Daftar artikel</h1>






	<table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
    <th colspan="2">Judul</th> 
    <th>Tanggal</th>
 
</tr> 
</thead> 
@foreach($daftarartikel as $artikel)

<tbody> 
<tr> 
	<td>{{ $artikel->id }}</td>
    <td><a href="{{ url('artikel', $artikel->id)}}">{{ $artikel->judul}}</a></td> 
    <td>1</td>
</tr> 

@endforeach
</tbody> 
</table>
@stop