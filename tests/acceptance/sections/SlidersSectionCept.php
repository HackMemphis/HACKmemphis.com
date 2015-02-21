<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure sliders section displays');
$I->amOnPage('/');
$I->see('#sliders');
$I->dontSee('whoops');
