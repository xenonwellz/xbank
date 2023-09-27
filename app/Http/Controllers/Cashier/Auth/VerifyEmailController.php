<?php

namespace App\Http\Controllers\Cashier\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated cashier's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->user('cashier')->hasVerifiedEmail()) {
            return redirect()->intended(route('cashier.dashboard').'?verified=1');
        }

        if ($request->user('cashier')->markEmailAsVerified()) {
            event(new Verified($request->user('cashier')));
        }

        return redirect()->intended(route('cashier.dashboard').'?verified=1');
    }
}
