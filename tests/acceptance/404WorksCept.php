<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that frontpage works');
$I->amOnPage('/some/bad/url/that/will/never/exist');
$I->see('404 - Invalid URl');
$I->dontSee('whoops');
