<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure header section displays');
$I->amOnPage('/');
$I->see('Home', '//*[@id="navigation"]/li[1]/a');
$I->see('About', '//*[@id="navigation"]/li[2]/a');
$I->see('Sponsors', '//*[@id="navigation"]/li[3]/a');
$I->see('Mailing List', '//*[@id="navigation"]/li[4]/a');
$I->see('Contact', '//*[@id="navigation"]/li[5]/a');
$I->dontSee('whoops');
