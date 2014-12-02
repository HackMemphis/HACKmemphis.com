<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure sign up section displays');
$I->amOnPage('/');
$I->see('#mailinglist');
$I->see('Mailing List Sign Up', '.section-title');
$I->dontSee('whoops');
