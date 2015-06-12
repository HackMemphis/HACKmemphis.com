<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure sponsors section displays');
$I->amOnPage('/sponsors');
$I->see('2015 Sponsors', '//*[@id="sponsors"]/div[1]/h1/span');
$I->dontSee('whoops');
