<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->string('cp')->nullable();
			$table->string('lokasi')->nullable();
			$table->enum('tag',['lomba','acara','sosial'])->nullable();
			$table->string('dateStart')->nullable();
			$table->string('dateEnd')->nullable();
			$table->enum('type',['artikel','kegiatan']);
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
		Schema::drop('contents');
	}

}
