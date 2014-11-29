<?php

class SponsorTableSeeder extends Seeder {

	public function run()
	{

		foreach(range(1, 10) as $index)
		{
			DB::table('sponsors')->delete();
			
			$year2013 = Year::where('year', '2013')->first();
			$year2014 = Year::where('year', '2014')->first();

			$sponsors = [];

			$sponsors[] = ['name' => 'Vaco',
				'link' => 'http://www.vaco.com/',
				'logo_path' => 'images/vacologo.jpg',
				'alt_text' => 'Vaco',
				'current' => '0',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'EmergeMemphis',
				'link' => 'http://emergememphis.org/',
				'logo_path' => 'images/EmergeMemphis-Logo.png',
				'alt_text' => 'Emerge Memphis',
				'current' => '0',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'Lunaweb',
				'link' => 'http://www.lunaweb.com/',
				'logo_path' => 'images/lunaweb-logo.jpg',
				'alt_text' => 'Lunaweb',
				'current' => '0',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'Rackspace',
				'link' => 'http://www.rackspace.com/',
				'logo_path' => 'images/Rackspace_Cloud_Company_Logo_clr.png',
				'alt_text' => 'Rackspace',
				'current' => '0',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'Github',
				'link' => 'http://www.Github.com/',
				'logo_path' => 'images/GitHub_Logo.png',
				'alt_text' => 'Github',
				'current' => '1',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'Github',
				'link' => 'http://www.Github.com/',
				'logo_path' => 'images/GitHub_Logo.png',
				'alt_text' => 'Github',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'GeekBlogTV',
				'link' => 'http://www.youtube.com/user/GeekBlogTV',
				'logo_path' => 'images/geekblogtv-logo.png',
				'alt_text' => 'GeekBlogTV',
				'current' => '1',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'GeekBlogTV',
				'link' => 'http://www.youtube.com/user/GeekBlogTV',
				'logo_path' => 'images/geekblogtv-logo.png',
				'alt_text' => 'GeekBlogTV',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'JetBrains',
				'link' => 'http://www.jetbrains.com/',
				'logo_path' => 'images/JetBrains-logo.png',
				'alt_text' => 'JetBrains',
				'current' => '0',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'erf design',
				'link' => 'http://www.erfdesign.com/',
				'logo_path' => 'images/erf-design-logo.jpg',
				'alt_text' => 'erf design',
				'current' => '1',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'erf design',
				'link' => 'http://www.erfdesign.com/',
				'logo_path' => 'images/erf-design-logo.jpg',
				'alt_text' => 'erf design',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'Modern Services',
				'link' => 'http://www.modernservicesinc.com/',
				'logo_path' => 'images/modernservices.png',
				'alt_text' => 'Modern Services',
				'current' => '1',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'Modern Services',
				'link' => 'http://www.modernservicesinc.com/',
				'logo_path' => 'images/modernservices.png',
				'alt_text' => 'Modern Services',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'RocketFuel',
				'link' => 'http://www.gorocketfuel.com/',
				'logo_path' => 'images/rocketfuel-logo.png',
				'alt_text' => 'RocketFuel',
				'current' => '1',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'RocketFuel',
				'link' => 'http://www.gorocketfuel.com/',
				'logo_path' => 'images/rocketfuel-logo.png',
				'alt_text' => 'RocketFuel',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'O\'Reilly Media',
				'link' => 'http://oreilly.com/',
				'logo_path' => 'images/oreilly-logo-460x84.gif',
				'alt_text' => 'O\'Reilly Media',
				'current' => '1',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'O\'Reilly Media',
				'link' => 'http://oreilly.com/',
				'logo_path' => 'images/oreilly-logo-460x84.gif',
				'alt_text' => 'O\'Reilly Media',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'MidsouthMakers',
				'link' => 'http://www.midsouthmakers.org/',
				'logo_path' => 'images/stackedlarge-460x435.png',
				'alt_text' => 'Memphis Area Makerspace',
				'current' => '1',
				'year_id' => $year2013->year
			];
			$sponsors[] = ['name' => 'MidsouthMakers',
				'link' => 'http://www.midsouthmakers.org/',
				'logo_path' => 'images/stackedlarge-460x435.png',
				'alt_text' => 'Memphis Area Makerspace',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'foxycart!',
				'link' => 'http://www.foxycart.com/',
				'logo_path' => 'images/foxycart.png',
				'alt_text' => 'FoxyCart: A Shopping Cart Platform for Custom Ecommerce',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'University of Memphis EECE',
				'link' => 'https://www.memphis.edu/eece/',
				'logo_path' => 'images/uofmeece.png',
				'alt_text' => 'The University of Memphis Department of Electrical and Computer Engineering',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'Cowork Memphis',
				'link' => 'http://coworkmemphis.com/',
				'logo_path' => 'images/coworkmemphis.png',
				'alt_text' => 'Cowork Memphis is a collaborative coworking space.',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'Survey Analytics',
				'link' => 'http://www.surveyanalytics.com/',
				'logo_path' => 'images/surveyanalytics.jpg',
				'alt_text' => 'enterprise grade research platform that provides companies with powerful tools',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'Crews Center for Entrepreneurship',
				'link' => 'http://memphis.edu/crews',
				'logo_path' => 'images/crews-center-logo.jpg',
				'alt_text' => 'Hub of entrepreneurship at the University of Memphis',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'FedEx Institute of Technology',
				'link' => 'http://www.memphis.edu/fedex',
				'logo_path' => 'images/fit-logo.png',
				'alt_text' => 'The FedEx Institute serves as a gateway to introduce business leaders to the university\'s research capabilities, thereby building value-added relationships with our corporate partners.',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'Peatix',
				'link' => 'http://peatix.com',
				'logo_path' => 'images/peatix-logo.png',
				'alt_text' => 'Create sleek event pages in minutes!',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'SparkFun',
				'link' => 'http://SparkFun.com',
				'logo_path' => 'images/sparkfun-logo.png',
				'alt_text' => 'SparkFun is an online retail store that sells the bits and pieces to make your electronics projects possible',
				'current' => '1',
				'year_id' => $year2014->year
			];
			$sponsors[] = ['name' => 'Hacker Stickers',
				'link' => 'http://hackerstickers.com/',
				'logo_path' => 'images/hs-logo-hr.png',
				'alt_text' => 'Hacker Stickers for Security Geeks & Gamers T-Shirts Energy Candy and Hardware',
				'current' => '1',
				'year_id' => $year2014->year
			];
			foreach ($sponsors as $sponsor) {
				DB::table('sponsors')->insert($sponsor);
			}
		}
	}

}