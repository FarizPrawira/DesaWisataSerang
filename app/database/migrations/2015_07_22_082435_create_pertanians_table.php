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
			$table->primary('tahun');
			$table->float('jagung_luas');
			$table->float('jagung_hasil');
			$table->float('ubi_kayu_luas');
			$table->float('ubi_kayu_hasil');
			$table->float('ubi_jalar_luas');
			$table->float('ubi_jalar_hasil');
			$table->float('cabai_luas');
			$table->float('cabai_hasil');
			$table->float('tomat_luas');
			$table->float('tomat_hasil');
			$table->float('sawi_luas');
			$table->float('sawi_hasil');
			$table->float('kentang_luas');
			$table->float('kentang_hasil');
			$table->float('kubis_luas');
			$table->float('kubis_hasil');
			$table->float('buncis_luas');
			$table->float('buncis_hasil');
			$table->float('terong_luas');
			$table->float('terong_hasil');
			$table->float('wortel_luas');
			$table->float('wortel_hasil');
			$table->float('padi_luas');
			$table->float('padi_hasil');
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
