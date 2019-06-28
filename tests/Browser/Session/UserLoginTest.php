<?php

namespace Tests\Browser\Session;

use App\User;
use Illuminate\Support\Facades\Hash;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserLoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     * @test
     */
    public function successfullyLoggedIn()
    {
        $this->browse(function (Browser $browser) {
            factory(User::class)->create(['username' => 'admin', 'password' => Hash::make('secret')]);

            $browser->visit(route('login'))
                    ->type('username', 'admin')
                    ->type('password', 'secret')
                    ->click('#login-button')
                ->assertSee('home');
        });
    }
}
