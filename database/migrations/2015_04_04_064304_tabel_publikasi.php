<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPublikasi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publikasi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul', 50);
			$table->string('slug', 50)->unique();
			$table->text('isi');
			
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
		Schema::drop('publikasi');
	}

}
