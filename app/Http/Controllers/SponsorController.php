<?php namespace App\Http\Controllers;

class SponsorController extends Controller {

    protected $sponsor;
    protected $year;

    public function __construct(\Sponsor $sponsor, \Year $year)
    {
        $this->sponsor = $sponsor;
        $this->year = $year;
    }

    public function index()
    {
		// Get 2014 Sponsors
		$sponsors['2014'] = $this->year
			->where('year', '2014')
			->first()
			->sponsors;

		// Get 2013 Sponsors
		$sponsors['2013'] = $this->year
			->where('year', '2013')
			->first()
			->sponsors;

        // Get 2015 Sponsors
        $sponsors['2015'] = $this->year
            ->where('year', '2015')
            ->first()
            ->sponsors;

        return \View::make('sponsors.index')
                    ->with('sponsors', $sponsors);
    }
}