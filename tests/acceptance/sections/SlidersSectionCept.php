<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure sliders section displays');
$I->amOnPage('/');
$I->seeElement('#sliders');
$I->seeElement('#image-slider');
$I->dontSee('whoops');
