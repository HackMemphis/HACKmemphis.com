<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure contact section displays');
$I->amOnPage('/');
$I->see('Contact', '//*[@id="navigation"]/li[5]/a');
$I->see('Contact', '//*[@id="contact"]/div/div/h1/span');
$I->dontSee('whoops');
