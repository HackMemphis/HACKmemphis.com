<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomepageTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHomePageTitle()
    {
        $this->visit('/')
            ->see('<title>HACKmemphis.com | Make Tech Happen</title>')
            ->dontSee('Whoops');
    }
}
