<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure about section displays');
$I->amOnPage('/');
$I->see('#about');
$I->see('About', '.section-title');
$I->dontSee('whoops');
