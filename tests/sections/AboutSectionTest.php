<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactSectionTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testContactSection()
    {
        $this->visit('/')
            ->see('<a class="scroll" href="#contact">Contact</a>')
            ->see('<span>Contact</span>')
            ->dontSee('Whoops');
    }
}
