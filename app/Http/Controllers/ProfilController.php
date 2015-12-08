<?php namespace webprog\Http\Controllers;

use webprog\Http\Requests;
use webprog\Http\Controllers\Controller;
use webprog\artikel;
use webprog\komentar_artikel;
use webprog\Http\Requests\TambahArtikelRequest;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use File;

class ProfilController extends Controller {

	public function profil()
	{
		$first ='Evan';
		$last = 'Sumangkut';
		$artikel = artikel::all();

		return view('profil.profil', compact('first','last','artikel'));
	}

		public function tampilprofil($slug)
	{
		$first ='Evan';
		$last = 'Sumangkut';
		$artikel = artikel::whereSlug($slug)->firstOrFail();
		return view('profil.showprofil', compact('first','last','artikel'));
	}

	public function create()
	{
		return view('profil.createprofil');
	}

	public function simpan(TambahArtikelRequest $request)
	{
		

		$input = $request->all();
		$input['slug'] = str_slug($request->input('judul'));

		if($request->hasFile('gambar'))
		{
		$nama_file = $input['gambar']->getClientOriginalName();
		$save_path = 'img/';
		#save ke komputer
		$gambar = $input['gambar']->move($save_path, $nama_file);
		#input ke database
		$input['gambar'] = $save_path.$nama_file;
		}

		else
		{
		$input['gambar'] = '';	
		}
		artikel::create($input);

		return redirect('profil');
	}

	public function edit($slug)
	{
		$artikel = artikel::whereSlug($slug)->firstOrFail();
		return view('profil.edit', compact('artikel'));
	}




	public function update(TambahArtikelRequest $request, $slug)
	{
		// $input = $request->all();
		$artikel = Artikel::whereSlug($slug)->firstOrFail();
		$input = $request->all();

		$input ['slug'] = str_slug($request->input('judul'));

		if($request->hasFile('gambar'))
		{
		$nama_file = $input['gambar']->getClientOriginalName();
		$save_path = 'img/';
		#save ke komputer
		$gambar = $input['gambar']->move($save_path, $nama_file);
		#input ke database
		$input['gambar'] = $save_path.$nama_file;
		}
		else
		{
		$input['gambar'] = $artikel->gambar;	
		}
		try
		{
		$artikel->update($input);
		}
		catch(QueryException $e)
		{
			return redirect()->back()
								->with('error', 'Judul sudah ada');
		}
		return redirect('profil')
				->with('pesan', 'Update Berhasil');
	}

	public function hapus($slug)
	{
		$artikel = Artikel::whereSlug($slug)->firstOrFail();
		$artikel->delete();

		File::delete($artikel->gambar); // /

		return redirect('profil')->with('pesan','Berita berhasil dihapus');
	}

	public function komentar()
	{

	

		$daftarartikel = artikel::with('komen')->get();

		return view('profil.komentar', compact('daftarartikel'));

	}

	
}
