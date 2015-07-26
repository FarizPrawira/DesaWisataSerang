<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePertaniansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pertanians', function(Blueprint $table)
		{
			// $table->increments('id');
			$table->integer('tahun');
			$table->real('jagung_luas');
			$table->real('jagung_hasil');
			$table->real('ubi_kayu_luas');
			$table->real('ubi_kayu_hasil');
			$table->real('ubi_jalar_luas');
			$table->real('ubi_jalar_hasil');
			$table->real('cabai_luas');
			$table->real('cabai_hasil');
			$table->real('tomat_luas');
			$table->real('tomat_hasil');
			$table->real('sawi_luas');
			$table->real('sawi_hasil');
			$table->real('kentang_luas');
			$table->real('kentang_hasil');
			$table->real('kubis_luas');
			$table->real('kubis_hasil');
			$table->real('buncis_luas');
			$table->real('buncis_hasil');
			$table->real('terong_luas');
			$table->real('terong_hasil');
			$table->real('wortel_luas');
			$table->real('wortel_hasil');
			$table->real('padi_luas');
			$table->real('padi_hasil');
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
		Schema::drop('pertanians');
	}

}
