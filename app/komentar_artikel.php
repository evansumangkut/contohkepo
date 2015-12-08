<?php namespace webprog;

use Illuminate\Database\Eloquent\Model;

class komentar_artikel extends Model {

	protected $table = 'tb_komentar_artikel'; 

	protected $fillable =['id','id_artikel','isi_komentar'];

	public function artikel()
	{
		return $this->belongsTo('webprog\artikel','id');
	}

}
