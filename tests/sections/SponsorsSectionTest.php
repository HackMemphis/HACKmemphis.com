<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SponsorsSectionTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSponsorsSectionTest()
    {
        $this->visit('/')
            ->see('<a class="scroll" href="#sponsors">Sponsors</a>')
            ->see('<span>2015 Sponsors</span>')
            ->dontSee('Whoops');
    }
}
