<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('agroBiaya');
			$table->text('agroFasilitas');
			$table->string('agroKet');
			$table->string('campBiaya');
			$table->text('campFasilitas');
			$table->string('campKet');
			$table->string('homeBiaya');
			$table->text('homeFasilitas');
			$table->string('homeKet');
			$table->string('trackBiaya');
			$table->text('trackFasilitas');
			$table->string('trackKet');
			$table->string('outBiaya');
			$table->text('outFasilitas');
			$table->string('outKet');
			$table->string('paintBiaya');
			$table->text('paintFasilitas');
			$table->string('paintKet');
			$table->string('rapelBiaya');
			$table->text('rapelFasilitas');
			$table->string('rapelKet');
			$table->string('familyBiaya');
			$table->text('familyFasilitas');
			$table->string('familyKet');
			$table->string('pendakianBiaya');
			$table->text('pendakianFasilitas');
			$table->string('pendakianKet');
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
		Schema::drop('tics');
	}

}
