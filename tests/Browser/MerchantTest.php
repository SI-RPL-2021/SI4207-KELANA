<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MerchantTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Merchant
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Login')
                ->type('email', 'shafatathya@gmail.com')
                ->type('password', '12345678')
                ->press('Login')
                ->assertPathIs('/user')
                ->visit('/merchant')
                ->assertSee('Merchant')
                ->press('Merchant')
                ->assertPathIs('/merchant');
        });
    }
}
