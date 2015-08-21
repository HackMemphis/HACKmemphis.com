<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HeaderSectionTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHeaderSectionTest()
    {
        $this->visit('/')
            ->see('<a class="scroll" href="#page">Home</a>')
            ->see('<a class="scroll" href="#about">About</a>')
            ->see('<a class="scroll" href="#sponsors">Sponsors</a>')
            ->see('<a class="scroll" href="#mailinglist">Mailing List</a>')
            ->see('<a class="scroll" href="#contact">Contact</a>')
            ->dontSee('Whoops');
    }
}
