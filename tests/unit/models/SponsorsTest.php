<?php
class SponsorsTest extends \Codeception\TestCase\Test
{
    /**
     * @var UnitTester
     */
    protected $tester;

    protected $sponsor_id;

    function _before()
    {
        // Create an empty directory entry
        $this->sponsor_id = $this->tester->haveRecord('sponsors', [
            'name' => 'Test Sponsor',
            'link' => 'http://www.HACKmemphis.com',
            'logo_path' => 'http://HACKmemphis.com/image.jpg',
            'alt_text' => 'HACKmemphis Hackathon',
            'current' => '1',
            'year_id' => '1'
        ]);
    }
    function testCanSeeSponsors()
    {
        // checking that data was actually saved into database
        $this->tester->seeRecord('sponsors', [
            'id' => $this->sponsor_id,
            'name' => 'Test Sponsor',
            'link' => 'http://www.HACKmemphis.com',
            'logo_path' => 'http://HACKmemphis.com/image.jpg',
            'alt_text' => 'HACKmemphis Hackathon',
            'current' => '1',
            'year_id' => '1'
        ]);
    }


}
