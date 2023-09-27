<?php

namespace Tests\Feature;

use App\Models\Cashier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CashierPasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    public function test_confirm_password_screen_can_be_rendered()
    {
        $cashier = Cashier::factory()->create();

        $response = $this->actingAs($cashier, 'cashier')->get('cashier/confirm-password');

        $response->assertStatus(200);
    }

    public function test_password_can_be_confirmed()
    {
        $cashier = Cashier::factory()->create();

        $response = $this->actingAs($cashier, 'cashier')->post('cashier/confirm-password', [
            'password' => 'password',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
    }

    public function test_password_is_not_confirmed_with_invalid_password()
    {
        $cashier = Cashier::factory()->create();

        $response = $this->actingAs($cashier, 'cashier')->post('cashier/confirm-password', [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
    }
}
