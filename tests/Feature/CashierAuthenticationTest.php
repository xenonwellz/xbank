<?php

namespace Tests\Feature;

use App\Models\Cashier;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CashierAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('cashier/login');

        $response->assertStatus(200);
    }

    public function test_cashiers_can_authenticate_using_the_login_screen()
    {
        $cashier = Cashier::factory()->create();

        $response = $this->post('cashier/login', [
            'email' => $cashier->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated('cashier');
        $response->assertRedirect(route('cashier.dashboard'));
    }

    public function test_cashiers_can_not_authenticate_with_invalid_password()
    {
        $cashier = Cashier::factory()->create();

        $this->post('cashier/login', [
            'email' => $cashier->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest('cashier');
    }
}
