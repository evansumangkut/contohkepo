<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelArtikelKomentar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_komentar_artikel', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_artikel')->unsigned();
			$table->string('isi_komentar');
			$table->timestamps();

			$table->foreign('id_artikel')
				->references('id')
				->on('artikel')
				->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_komentar_artikel');
	}

}
