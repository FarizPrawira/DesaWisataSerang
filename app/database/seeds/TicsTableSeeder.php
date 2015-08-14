<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TicsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Tic::create([
			'agroBiaya' => '120.000/org',
			'agroFasilitas' => '3 lokasi kebun<br />Pemandu<br />Welcome Drink<br />Makan Siang<br />Dokumentasi(soft copy)',
			'agroKet' => 'Min. 20 org',
			'campBiaya' => '50.000/org/hr',
			'campFasilitas' => 'Lokasi kegiatan<br />Tenda(kapasitas 3 org)',
			'campKet' => 'Min. 20 org',
			'homeBiaya' => '300.000/org',
			'homeFasilitas' => 'Homestay<br />Pemandu<br />Welcome Drink<br />Makan<br />Dokumentasi(soft copy)',
			'homeKet' => '2 hari 1 malam',
			'trackBiaya' => '40.000/org',
			'trackFasilitas' => 'Pemandu<br />Air Mineral<br />Snack',
			'trackKet' => 'Min. 20 org',
			'outBiaya' => '250.000/org',
			'outFasilitas' => 'Fasilitator<br />Welcome Drink<br />Makan Siang',
			'outKet' => 'Min. 20 org',
			'paintBiaya' => '150.000/org',
			'paintFasilitas' => 'Pemandu<br />Senapan<br />Peluru 900 buah<br />Dokumentasi(soft copy)',
			'paintKet' => 'Min. 30 org',
			'rapelBiaya' => '35.000/org',
			'rapelFasilitas' => 'Operator<br />Peralatam',
			'rapelKet' => 'Min. 20 org',
			'familyBiaya' => '170.000/org',
			'familyFasilitas' => 'Fasilitator<br />Fun Games<br />Tracking<br />Flying Fox<br />Welcome Drink<br />Makan Siang<br />Dokumentasi(soft copy)',
			'familyKet' => 'Min. 30 org',
			'pendakianBiaya' => '650.000/org',
			'pendakianFasilitas' => 'Pemandu - Porter<br />Tenda<br />Perijinan<br />Dokumentasi(soft copy)',
			'pendakianKet' => 'Min. 5 org',
		]);
	}

}