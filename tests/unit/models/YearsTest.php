<?php
class YearsTest extends \Codeception\TestCase\Test
{
    /**
     * @var UnitTester
     */
    protected $tester;

    protected $year_id;

    function _before()
    {
        // Create an empty directory entry
        $this->year_id = $this->tester->haveRecord('years', [
            'year' => '2014',
            'sponsor_id' => '1'
        ]);
    }
    function testCanSeeYears()
    {
        // checking that data was actually saved into database
        $this->tester->seeRecord('years', [
            'id' => $this->year_id,
            'year' => '2014',
            'sponsor_id' => '1'
        ]);
    }


}
