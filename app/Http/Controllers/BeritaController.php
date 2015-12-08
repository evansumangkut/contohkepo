<?php namespace webprog\Http\Controllers;

use webprog\Http\Requests;
use webprog\Http\Controllers\Controller;
use webprog\berita;
use webprog\Http\Requests\TambahBeritaRequest;

use Illuminate\Http\Request;



class BeritaController extends Controller {

	public function daftarberita()
	{
		$a=1;
		$daftarberita = berita::orderBy('id','desc')->get();
		return view('berita.daftarberita',compact('daftarberita','a'));
	}

	public function show($id)
	{
		$berita = berita::find($id);


		return view('berita.show',compact('berita'));
	}

	public function create()
	{
		return view('berita.create');
	}

	public function store(TambahBeritaRequest $request)
	{
		$input = $request->all();
		

		$berita = new berita;
		$berita->judul = $input['judul'];
		$berita->isi = $input['isi'];
		$berita->save();

		return redirect('berita');
	}

	public function edit($id)
	{
		$berita = berita::findOrFail($id);
		return view('berita.edit', compact('berita'));
	}

	public function update($id, Request $request)
	{
		

		$input = update($request->all());
		
		$beritaa = Berita::findOrFail($id);
	
		$beritaa->judul = $input['judul'];
		$beritaa->isi = $input['isi'];
		$beritaa->save();

		return redirect('berita');

	}

}
