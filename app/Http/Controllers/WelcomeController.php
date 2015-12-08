<?php namespace webprog\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.beranda');
	}

	public function upload()
	{
		return view('upload');
	}

	public function profil()
	{
		$first ='Evan';
		$last = 'Sumangkut';
		$artikel = \webprog\artikel::all();

		return view('pages.profil', compact('first','last','artikel'));
	}

		public function tampilprofil($id)
	{
		$first ='Evan';
		$last = 'Sumangkut';
		$artikel = \webprog\artikel::whereSlug($id)->firstOrFail();
		return view('pages.showprofil', compact('first','last','artikel'));
	}


	public function tentang()
	{
		$people = [
			'Evan', 'Ryan', 'Risqan'
		];
		return view('pages.tentang', compact('people'));
	}
}
