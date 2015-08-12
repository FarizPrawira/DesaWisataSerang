<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PertaniansTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Pertanian::create([
			'tahun' => '2010',
			'jagung_luas' => '83.75',
			'jagung_hasil' => '2.8',
			'ubi_kayu_luas' => '20',
			'ubi_kayu_hasil' => '7.2',
			'ubi_jalar_luas' => '8',
			'ubi_jalar_hasil' => '3.1',
			'cabai_luas' => '6.4',
			'cabai_hasil' => '7.6',
			'tomat_luas' => '8.3',
			'tomat_hasil' => '12.7',
			'sawi_luas' => '23',
			'sawi_hasil' => '4.8',
			'kentang_luas' => '12.86',
			'kentang_hasil' => '15.1',
			'kubis_luas' => '32.41',
			'kubis_hasil' => '22',
			'buncis_luas' => '6',
			'buncis_hasil' => '4',
			'terong_luas' => '0.3',
			'terong_hasil' => '7.6',
			'wortel_luas' => '62.5',
			'wortel_hasil' => '14.3',
			'padi_luas' => '9',
			'padi_hasil' => '1.2',
		]);
	}

}