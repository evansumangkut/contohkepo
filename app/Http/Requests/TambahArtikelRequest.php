<?php namespace webprog\Http\Requests;

use webprog\Http\Requests\Request;

class TambahArtikelRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'judul'=>'required',
			'isi'=>'required',
			/*'gambar'=>'mimes:pdf',*/
			'gambar'=>'image',
		];
	}

}
