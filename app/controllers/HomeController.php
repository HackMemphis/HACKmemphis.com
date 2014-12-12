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
		$sponsors['2014'] = $this->year
			->where('year', '2014')
			->first()
			->sponsors;

		// Get 2013 Sponsors
		$sponsors['2013'] = $this->year
			->where('year', '2013')
			->first()
			->sponsors;

		return View::make('index')
			->with('sponsors', $sponsors);
	}

}
