<?php

class Year extends \Eloquent {
	protected $fillable = [
		'year',
		'sponsor_id'
	];

	public function sponsors()
	{
		return $this->belongsToMany('Sponsor');
	}
}