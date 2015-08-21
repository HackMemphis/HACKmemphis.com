<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SignUpSectionTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSignUpSectionTest()
    {
        $this->visit('/')
            ->see('<a class="scroll" href="#mailinglist">Mailing List</a>')
            ->see('<span>Mailing List Sign Up</span>')
            ->dontSee('Whoops');
    }
}
