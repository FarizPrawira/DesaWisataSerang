<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PeternakansTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Peternakan::create([
			'tahun' => '2010',
			'sapi' => '273',
			'kambing' => '6258',
			'ayam' => '12584',
			'kuda' => '5',
			'susu' => '25600',
			'daging' => '0'
		]);
	}

}