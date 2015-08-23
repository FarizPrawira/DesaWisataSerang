<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PeternakansTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Peternakan::create([
			'tahun' => '2008',
			'sapi' => '180',
			'kambing' => '5950',
			'ayam' => '2500',
			'kuda' => '7',
			'susu' => '3840',
			'daging' => '69'
		]);

		Peternakan::create([
			'tahun' => '2009',
			'sapi' => '262',
			'kambing' => '5968',
			'ayam' => '6584',
			'kuda' => '7',
			'susu' => '34416',
			'daging' => '69'
		]);

		Peternakan::create([
			'tahun' => '2010',
			'sapi' => '273',
			'kambing' => '6258',
			'ayam' => '12584',
			'kuda' => '5',
			'susu' => '25600',
			'daging' => '69'
		]);

		Peternakan::create([
			'tahun' => '2011',
			'sapi' => '180',
			'kambing' => '5950',
			'ayam' => '2500',
			'kuda' => '7',
			'susu' => '3840',
			'daging' => '69'
		]);

	}
}