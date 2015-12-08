@extends('welcome')

@section('content')

<h1>Daftar berita</h1>






<table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
    <th colspan="2">Judul</th> 
    <th>Tanggal</th>
 
</tr> 
</thead> 
@foreach($daftarberita as $berita)

<tbody> 
<tr> 
	<td>{{ $a++ }}</td>
    <td><a href="{{ url('berita', $berita->id) }}">{{ $berita->judul}}</a></td> 
    <td>{{  $berita->created_at->format('d-my') }}</td>
</tr> 

@endforeach
</tbody> 
</table> 

@stop


