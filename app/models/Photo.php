<?php

class Photo extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'path' => 'max:10000|image',
	];

	// Don't forget to fill this array
	protected $fillable = ['path','content_id'];

	public function content()
    {
        return $this->belongsTo('Content');
    }

}