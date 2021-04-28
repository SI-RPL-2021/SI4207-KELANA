<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MerchantTest extends DuskTestCase
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
                ->assertSee('Login')
                ->type('email', 'shafatathya@gmail.com')
                ->type('password', '12345678')
                ->press('Login')
                ->assertPathIs('/user')
                ->visit('/merchant/create')
                ->assertSee('Add your Merchant')
                ->type('merchant_title', 'Peuyeum')
                ->attach('merchant_img', __DIR__.'/Components/Gambar Jurnal.png')
                ->type('merchant_description', 'Peuyeum Bandung')
                ->type('merchant_city', 'Bandung')
                ->type('merchant_address', 'Bojongsoang')
                ->press('Submit')
                ->assertPathIs('/merchant');
        });
    }
}
