<?php

class HomeController extends BaseController {

	protected $sponsor;
	protected $year;

	public function __construct(Sponsor $sponsor, Year $year)
	{
		$this->sponsor = $sponsor;
		$this->year = $year;
	}

	public function index()
	{
		// Get 2014 Sponsors
		$year2014 = $this->year->where('year', '2014')->first();
		$sponsors['2014'] = Year::find($year2014->id)->sponsors;

		// Get 2013 Sponsors
		$year2013 = $this->year->where('year', '2013')->first();
		$sponsors['2013'] = Year::find($year2013->id)->sponsors;

		return View::make('index')
			->with('sponsors', $sponsors);
	}

}
