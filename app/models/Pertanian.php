<?php

class Pertanian extends \Eloquent {

	protected $primaryKey = 'tahun';
	// Add your validation rules here
	public static $rules = [
		'tahun' => 'required',
		'jagung_luas' => 'required',
		'jagung_hasil' => 'required',
		'ubi_kayu_luas' => 'required',
		'ubi_kayu_hasil' => 'required',
		'ubi_jalar_luas' => 'required',
		'ubi_jalar_hasil' => 'required',
		'cabai_luas' => 'required',
		'cabai_hasil' => 'required',
		'tomat_luas' => 'required',
		'tomat_hasil' => 'required',
		'sawi_luas' => 'required',
		'sawi_hasil' => 'required',
		'kentang_luas' => 'required',
		'kentang_hasil' => 'required',
		'kubis_luas' => 'required',
		'kubis_hasil' => 'required',
		'buncis_luas' => 'required',
		'buncis_hasil' => 'required',
		'terong_luas' => 'required',
		'terong_hasil' => 'required',
		'wortel_luas' => 'required',
		'wortel_hasil' => 'required',
		'padi_luas' => 'required',
		'padi_hasil' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['tahun','jagung_luas','jagung_hasil','ubi_kayu_luas','ubi_kayu_hasil','ubi_jalar_luas','ubi_jalar_hasil','cabai_luas','cabai_hasil','tomat_luas','tomat_hasil','sawi_luas','sawi_hasil','kentang_luas','kentang_hasil','kubis_luas','kubis_hasil','buncis_luas','buncis_hasil','terong_luas','terong_hasil','wortel_luas','wortel_hasil','padi_luas','padi_hasil'];

}