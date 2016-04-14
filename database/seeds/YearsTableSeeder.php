<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class YearsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('years')->delete();

        foreach (range(2013, 2020) as $index) {
            Year::create([
                'year' => $index
            ]);
        }
    }
}
