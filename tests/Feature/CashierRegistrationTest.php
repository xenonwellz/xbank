<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CashierRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('cashier/register');

        $response->assertStatus(200);
    }

    public function test_new_cashiers_can_register()
    {
        $response = $this->post('cashier/register', [
            'name' => 'Test Cashier',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated('cashier');
        $response->assertRedirect(route('cashier.dashboard'));
    }
}
