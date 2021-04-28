<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
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
                ->assertSee('Welcome')
                ->type('email', 'abdurahmanihsan25@gmail.com')
                ->type('password', 'ihsan432')
                ->press('Login')
                ->assertPathIs('/user');
        });
    }
}
