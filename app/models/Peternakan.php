<?php

class Peternakan extends \Eloquent {

	protected $primaryKey = 'tahun';
	// Add your validation rules here
	public static $rules = [
		'tahun' => 'required',
		'sapi' => 'required',
		'kambing' => 'required',
		'ayam' => 'required',
		'kuda' => 'required',
		'susu' => 'required',
		'daging' => 'required',

	];

	// Don't forget to fill this array
	protected $fillable = ['tahun','sapi','kambing','ayam','kuda','susu','daging'];

}