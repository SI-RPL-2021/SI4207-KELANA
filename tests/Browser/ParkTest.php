<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ParkTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'rizky@mail.com')
                    ->type('password', 'r12kyfadil')
                    ->press('Login')
                    ->assertPathIs('/user')
                    ->visit('/park')
                    ->assertSee('Find out your nearest Tourist Attractions!');
        });
    }
}
