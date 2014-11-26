<?php

class SponsorController extends \BaseController {

    protected $sponsor;
    protected $year;

    public function __construct(Sponsor $sponsor, Years $year)
    {
        $this->sponsors = $sponsor;
        $this->years = $year;
    }
}