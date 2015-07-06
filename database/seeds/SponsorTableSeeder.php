<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SponsorTableSeeder extends Seeder {

	public function run()
	{

		foreach(range(1, 10) as $index)
		{
			DB::table('sponsors')->delete();
			
			$year2013 = Year::where('year', '2013')->first();
			$year2014 = Year::where('year', '2014')->first();
            $year2015 = Year::where('year', '2015')->first();

			$sponsors = [];

			$sponsors[] = array('name' => 'Vaco',
				'link' => 'http://www.vaco.com/',
				'logo_path' => 'images/vaco2015.png',
				'alt_text' => 'Vaco',
				'current' => '0',
				'year' => '2013,2015'
			);
			$sponsors[] = array('name' => 'EmergeMemphis',
				'link' => 'http://emergememphis.org/',
				'logo_path' => 'images/EmergeMemphis-Logo.png',
				'alt_text' => 'Emerge Memphis',
				'current' => '0',
				'year' => '2013'
			);
			$sponsors[] = array('name' => 'Lunaweb',
				'link' => 'http://www.lunaweb.com/',
				'logo_path' => 'images/lunaweb-logo.jpg',
				'alt_text' => 'Lunaweb',
				'current' => '0',
				'year' => '2013'
			);
			$sponsors[] = array('name' => 'Rackspace',
				'link' => 'http://www.rackspace.com/',
				'logo_path' => 'images/Rackspace_Cloud_Company_Logo_clr.png',
				'alt_text' => 'Rackspace',
				'current' => '0',
				'year' => '2013'
			);
			$sponsors[] = array('name' => 'Github',
				'link' => 'http://www.Github.com/',
				'logo_path' => 'images/GitHub_Logo.png',
				'alt_text' => 'Github',
				'current' => '0',
				'year' => '2013,2014'
			);
			$sponsors[] = array('name' => 'GeekBlogTV',
				'link' => 'http://www.youtube.com/user/GeekBlogTV',
				'logo_path' => 'images/geekblogtv-logo.png',
				'alt_text' => 'GeekBlogTV',
				'current' => '0',
				'year' => '2013,2014'
			);
			$sponsors[] = array('name' => 'JetBrains',
				'link' => 'http://www.jetbrains.com/',
				'logo_path' => 'images/JetBrains-logo.png',
				'alt_text' => 'JetBrains',
				'current' => '0',
				'year' => '2013'
			);
			$sponsors[] = array('name' => 'erf design',
				'link' => 'http://www.erfdesign.com/',
				'logo_path' => 'images/erf-design-logo.jpg',
				'alt_text' => 'erf design',
				'current' => '0',
				'year' => '2013,2014'
			);
			$sponsors[] = array('name' => 'Modern Services',
				'link' => 'http://www.modernservicesinc.com/',
				'logo_path' => 'images/modernservices.png',
				'alt_text' => 'Modern Services',
				'current' => '0',
				'year' => '2013,2014'
			);
			$sponsors[] = array('name' => 'RocketFuel',
				'link' => 'http://www.gorocketfuel.com/',
				'logo_path' => 'images/rocketfuel-logo.png',
				'alt_text' => 'RocketFuel',
				'current' => '0',
				'year' => '2013,2014'
			);
			$sponsors[] = array('name' => 'O\'Reilly Media',
				'link' => 'http://oreilly.com/',
				'logo_path' => 'images/oreilly-logo-460x84.gif',
				'alt_text' => 'O\'Reilly Media',
				'current' => '0',
				'year' => '2013,2014'
			);
			$sponsors[] = array('name' => 'MidsouthMakers',
				'link' => 'http://www.midsouthmakers.org/',
				'logo_path' => 'images/stackedlarge-460x435.png',
				'alt_text' => 'Memphis Area Makerspace',
				'current' => '1',
				'year' => '2013,2014,2015'
			);
			$sponsors[] = array('name' => 'foxycart!',
				'link' => 'http://www.foxycart.com/',
				'logo_path' => 'images/foxycart.png',
				'alt_text' => 'FoxyCart: A Shopping Cart Platform for Custom Ecommerce',
				'current' => '0',
				'year' => '2014'
			);
			$sponsors[] = array('name' => 'University of Memphis EECE',
				'link' => 'https://www.memphis.edu/eece/',
				'logo_path' => 'images/uofmeece.png',
				'alt_text' => 'The University of Memphis Department of Electrical and Computer Engineering',
				'current' => '0',
				'year' => '2014'
			);
			$sponsors[] = array('name' => 'Cowork Memphis',
				'link' => 'http://coworkmemphis.com/',
				'logo_path' => 'images/coworkmemphis.png',
				'alt_text' => 'Cowork Memphis is a collaborative coworking space.',
				'current' => '0',
				'year' => '2014,2015'
			);
			$sponsors[] = array('name' => 'Survey Analytics',
				'link' => 'http://www.surveyanalytics.com/',
				'logo_path' => 'images/surveyanalytics.jpg',
				'alt_text' => 'enterprise grade research platform that provides companies with powerful tools',
				'current' => '0',
				'year' => '2014'
			);
			$sponsors[] = array('name' => 'Crews Center for Entrepreneurship',
				'link' => 'http://memphis.edu/crews',
				'logo_path' => 'images/crews-center-logo.jpg',
				'alt_text' => 'Hub of entrepreneurship at the University of Memphis',
				'current' => '0',
				'year' => '2014'
			);
			$sponsors[] = array('name' => 'FedEx Institute of Technology',
				'link' => 'http://www.memphis.edu/fedex',
				'logo_path' => 'images/fit-logo.png',
				'alt_text' => 'The FedEx Institute serves as a gateway to introduce business leaders to the university\'s research capabilities, thereby building value-added relationships with our corporate partners.',
				'current' => '0',
				'year' => '2014'
			);
			$sponsors[] = array('name' => 'Peatix',
				'link' => 'http://peatix.com',
				'logo_path' => 'images/peatix-logo.png',
				'alt_text' => 'Create sleek event pages in minutes!',
				'current' => '0',
				'year' => '2014'
			);
			$sponsors[] = array('name' => 'SparkFun',
				'link' => 'http://SparkFun.com',
				'logo_path' => 'images/sparkfun-logo.png',
				'alt_text' => 'SparkFun is an online retail store that sells the bits and pieces to make your electronics projects possible',
				'current' => '0',
				'year' => '2014'
			);
			$sponsors[] = array('name' => 'Hacker Stickers',
				'link' => 'http://hackerstickers.com/',
				'logo_path' => 'images/hs-logo-hr.png',
				'alt_text' => 'Hacker Stickers for Security Geeks & Gamers T-Shirts Energy Candy and Hardware',
				'current' => '0',
				'year' => '2014'
			);

            $sponsors[] = array('name' => 'Memphis Technology Foundation',
                'link' => 'http://memphistechnology.org/',
                'logo_path' => 'images/MTF-Stacked-Badge.png',
                'alt_text' => 'Facilitating technical events in the Memphis, TN Area',
                'current' => '1',
                'year' => '2013,2014,2015'
            );

			$sponsors[] = array('name' => 'learn43',
				'link' => 'http://learn43.me/',
				'logo_path' => 'images/learn43.png',
				'alt_text' => 'Creating experiences for students to come face to face with Computer Science, Design, and their dreams.',
				'current' => '1',
				'year' => '2015'
			);
			$sponsors[] = array('name' => 'CrossBrowserTesting.com',
				'link' => 'http://crossbrowsertesting.com/',
				'logo_path' => 'images/cbt-logo.png',
				'alt_text' => 'Test your websites on the same browsers and devices your customers use.',
				'current' => '1',
				'year' => '2015'
			);

			foreach ($sponsors as $sponsor) {
				// Turn Years into Array
				$years = explode(',', $sponsor['year']);
				// unset year so we can insert model
				unset($sponsor['year']);
				// insert the model
				$newSponsor = Sponsor::create($sponsor);

				foreach ($years as $year)
				{
					if ($year == '2013')
					{
						$newSponsor->years()
							->attach($year2013->id);
					}

					if ($year == '2014')
					{
						$newSponsor->years()
							->attach($year2014->id);
					}

                    if ($year == '2015')
                    {
                        $newSponsor->years()
                                   ->attach($year2015->id);
                    }
				}

			}
		}
	}

}