<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure about section displays');
$I->amOnPage('/');
$I->see('About', '//*[@id="navigation"]/li[2]/a');
//$I->see('About', '.section-title');
$I->see('About', '//*[@id="about"]/div/div/h1/span');
$I->dontSee('whoops');
