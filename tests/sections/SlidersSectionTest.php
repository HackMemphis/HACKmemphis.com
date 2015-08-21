<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SlidersSectionTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSlidersSectionTest()
    {
        $this->visit('/')
            ->see('<div id="sliders">')
            ->see('<span class="head">Make Tech Happen</span>')
            ->dontSee('Whoops');
    }
}
