<?php

class Tic extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'agroBiaya','agroFasilitas','agroKet',
	'campBiaya','campFasilitas','campKet',
	'homeBiaya','homeFasilitas','homeKet',
	'trackBiaya','trackFasilitas','trackKet',
	'outBiaya','outFasilitas','outKet',
	'paintBiaya','paintFasilitas','paintKet',
	'rapelBiaya','rapelFasilitas','rapelKet',
	'familyBiaya','familyFasilitas','familyKet',
	'pendakianBiaya','pendakianFasilitas','pendakianKet'
	];

}