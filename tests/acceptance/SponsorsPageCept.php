<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure sponsors section displays');
$I->amOnPage('/sponsors');
$I->see('Sponsors', '//*[@id="navigation"]/li[3]/a');
$I->see('2015 Sponsors', '//*[@id="sponsors"]/div[1]/h1/span');
$I->see('2014 Sponsors', '//*[@id="sponsors"]/div[2]/h1/span');
$I->see('2013 Sponsors', '//*[@id="sponsors"]/div[3]/h1/span');
$I->dontSee('whoops');
