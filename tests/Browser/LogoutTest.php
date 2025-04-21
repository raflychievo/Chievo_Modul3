<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'chievo@gmail.com')
                ->type('password', '1202224286')
                ->press('LOG IN')
                ->press('Chievo')
                ->clickLink('Log Out');
        });
    }
}
