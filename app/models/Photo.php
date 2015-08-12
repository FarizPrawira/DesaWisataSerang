<?php

class Photo extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
	];

	// Don't forget to fill this array
	protected $fillable = ['path','content_id'];

	public function content()
    {
        return $this->belongsTo('Content');
    }

}