<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
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
                ->clickLink('Notes')
                ->clickLink('Create Note')
                ->type('title', 'Hi')
                ->type('description', 'test')
                ->press('CREATE');
        });
    }
}
