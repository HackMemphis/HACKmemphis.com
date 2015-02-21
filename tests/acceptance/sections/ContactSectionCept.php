<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure contact section displays');
$I->amOnPage('/');
$I->see('#contact');
$I->see('Contact', '.section-title');
$I->dontSee('whoops');
