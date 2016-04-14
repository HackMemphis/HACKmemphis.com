<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SponsorsPageTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSponsorsPageTest()
    {
        $this->visit('/sponsors')
            ->see('<span>2016 Sponsors</span>')
            ->see('<span>2015 Sponsors</span>')
            ->see('<span>2014 Sponsors</span>')
            ->see('<span>2013 Sponsors</span>')
            ->dontSee('Whoops');
    }
}
