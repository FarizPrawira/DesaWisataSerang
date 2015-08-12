<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeternakansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('peternakans', function(Blueprint $table)
		{
			// $table->increments('id');
			$table->integer('tahun');
			$table->primary('tahun');
			$table->integer('sapi');
			$table->integer('kambing');
			$table->integer('ayam');
			$table->integer('kuda');
			$table->integer('susu');
			$table->integer('daging');
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
		Schema::drop('peternakans');
	}

}
