<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure sponsors section displays');
$I->amOnPage('/sponsors');
$I->see('#sponsors');
$I->see('2015 Sponsors', '.section-title');
$I->dontSee('whoops');
