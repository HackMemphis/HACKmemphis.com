<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure header section displays');
$I->amOnPage('/');
$I->seeLink('Home');
$I->seeLink('About');
$I->seeLink('Sponsors');
$I->seeLink('Contact');
$I->dontSee('whoops');
