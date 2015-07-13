<?php

class Content extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
		'description' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['title','description','type'];

	public function photos()
    {
    	return $this->hasMany('Photo');
    }

}