<?php

namespace Tests\Feature;

use App\Models\Cashier;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class CashierPasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_screen_can_be_rendered()
    {
        $response = $this->get('cashier/forgot-password');

        $response->assertStatus(200);
    }

    public function test_reset_password_link_can_be_requested()
    {
        Notification::fake();

        $cashier = Cashier::factory()->create();

        $response = $this->post('cashier/forgot-password', [
            'email' => $cashier->email,
        ]);

        Notification::assertSentTo($cashier, ResetPassword::class);
    }

    public function test_reset_password_screen_can_be_rendered()
    {
        Notification::fake();

        $cashier = Cashier::factory()->create();

        $response = $this->post('cashier/forgot-password', [
            'email' => $cashier->email,
        ]);

        Notification::assertSentTo($cashier, ResetPassword::class, function ($notification) {
            $response = $this->get('cashier/reset-password/'.$notification->token);

            $response->assertStatus(200);

            return true;
        });
    }

    public function test_password_can_be_reset_with_valid_token()
    {
        Notification::fake();

        $cashier = Cashier::factory()->create();

        $response = $this->post('cashier/forgot-password', [
            'email' => $cashier->email,
        ]);

        Notification::assertSentTo($cashier, ResetPassword::class, function ($notification) use ($cashier) {
            $response = $this->post('cashier/reset-password', [
                'token' => $notification->token,
                'email' => $cashier->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);

            $response->assertSessionHasNoErrors();

            return true;
        });
    }
}
