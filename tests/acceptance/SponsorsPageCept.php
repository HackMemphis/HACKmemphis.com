<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure sponsors section displays');
$I->amOnPage('/sponsors');
$I->see('#sponsors');
$I->see('2014 Sponsors', '.section-title');
$I->see('2013 Sponsors', '.section-title');
$I->dontSee('whoops');
