<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure sign up section displays');
$I->amOnPage('/');
$I->see('Mailing List', '//*[@id="navigation"]/li[4]/a');
$I->see('Mailing List Sign Up', '//*[@id="mailinglist"]/div/div/h1/span');
$I->dontSee('whoops');
