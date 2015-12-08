<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelArtikel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artikel', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul', 50);
			$table->string('slug', 50)->unique();
			$table->text('isi');
			$table->text('gambar');
			$table->timestamp('tanggal');
			$table->boolean('tampilkan')->default(false);
			$table->timestamps();
		


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artikel');
	}

}
