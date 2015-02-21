<?php

class HomeControllerTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->action('GET', 'HomeController@index');

        $this->assertResponseOk();

        $this->assertViewHas('sponsors');
    }
}

