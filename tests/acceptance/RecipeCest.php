<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class RecipeCest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/recipe/new');
        $I->fillField('#recipe_title', 'Boston Cheesecake');
        $I->fillField('#recipe_steps', 'buy packet - follow instructions');
        $I->fillField('#recipe_time', 60);
        $I->click('Save');


    }
}
