<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AboutSectionTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAboutSection()
    {
        $this->visit('/')
            ->see('<a class="scroll" href="#about">About</a>')
            ->see('<span>About</span>')
            ->dontSee('Whoops');
    }
}
