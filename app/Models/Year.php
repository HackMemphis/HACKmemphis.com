<?php

class Year extends \Eloquent
{
    protected $fillable = [
        'year',
        'sponsor_id'
    ];

    public function sponsors()
    {
        // many to many
        // $year->sponsors()->attach($sponsor_id);
        return $this->belongsToMany('Sponsor');
    }
}
