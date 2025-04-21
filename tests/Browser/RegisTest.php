<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->assertPathIs('/register')
                ->type('name', 'Chievo')
                ->type('email', 'chievo@gmail.com')
                ->type('password', '1202224286')
                ->press('REGISTER');
        });
    }
}
