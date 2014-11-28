<?php

class YearsTableSeeder extends Seeder {

	public function run()
	{

		foreach(range(2013, 2020) as $index)
		{
			Year::create([
				'year' => $index
			]);
		}
	}

}