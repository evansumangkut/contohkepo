<?php namespace webprog\Http\Controllers;

use webprog\Http\Requests;
use webprog\Http\Controllers\Controller;
use webprog\artikel;

use Illuminate\Http\Request;

class DataController extends Controller {

	public function artikel()
	{
		$daftarartikel = artikel::all();
		return view('berita.daftarartikel',compact('daftarartikel'));
	}

	public function show($id)
	{
		$artikel = artikel::find($id);


		return view('berita.showartikel',compact('artikel'));
	}

}
