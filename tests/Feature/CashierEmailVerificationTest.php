<?php

namespace Tests\Feature;

use App\Models\Cashier;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class CashierEmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_email_verification_screen_can_be_rendered()
    {
        $cashier = Cashier::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($cashier, 'cashier')->get('cashier/verify-email');

        $response->assertStatus(200);
    }

    public function test_email_can_be_verified()
    {
        Event::fake();

        $cashier = Cashier::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'cashier.verification.verify',
            now()->addMinutes(60),
            ['id' => $cashier->id, 'hash' => sha1($cashier->email)]
        );

        $response = $this->actingAs($cashier, 'cashier')->get($verificationUrl);

        Event::assertDispatched(Verified::class);
        $this->assertTrue($cashier->fresh()->hasVerifiedEmail());
        $response->assertRedirect(route('cashier.dashboard').'?verified=1');
    }

    public function test_email_is_not_verified_with_invalid_hash()
    {
        $cashier = Cashier::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'cashier.verification.verify',
            now()->addMinutes(60),
            ['id' => $cashier->id, 'hash' => sha1('wrong-email')]
        );

        $this->actingAs($cashier, 'cashier')->get($verificationUrl);

        $this->assertFalse($cashier->fresh()->hasVerifiedEmail());
    }
}
