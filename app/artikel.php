<?php namespace webprog;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model {

	protected $table = 'artikel'; 

	protected $fillable =['judul','isi','slug','gambar'];

	public function komen()
	{
		return $this->hasMany('webprog\komentar_artikel','id_artikel');
	}

}
