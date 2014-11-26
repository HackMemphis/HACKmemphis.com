<?php

class Sponsor extends \Eloquent {
	protected $fillable = [
		'name',
		'link',
		'logo_path',
		'alt_text',
		'current',
		'year_id'
	];

	public function years()
	{
		return $this->belongsToMany('Year');
	}
}