<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	protected $sponsor;
	protected $year;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(\Sponsor $sponsor, \Year $year)
	{
		$this->middleware('guest');
		$this->sponsor = $sponsor;
		$this->year = $year;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
//		// Get 2014 Sponsors
//		$sponsors['2014'] = $this->year
//			->where('year', '2014')
//			->first()
//			->sponsors;
//
//		// Get 2013 Sponsors
//		$sponsors['2013'] = $this->year
//			->where('year', '2013')
//			->first()
//			->sponsors;
		// Get 2013 Sponsors
		$sponsors['2015'] = $this->year
			->where('year', '2015')
			->first()
			->sponsors;

		return \View::make('index')
		           ->with('sponsors', $sponsors);
	}

}
