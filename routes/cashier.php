<?php

use App\Http\Controllers\Cashier\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Cashier\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Cashier\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Cashier\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Cashier\Auth\NewPasswordController;
use App\Http\Controllers\Cashier\Auth\PasswordResetLinkController;
use App\Http\Controllers\Cashier\Auth\RegisteredUserController;
use App\Http\Controllers\Cashier\Auth\VerifyEmailController;
use App\Http\Controllers\Cashier\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('cashier')->name('cashier.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->middleware('auth:cashier');

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware('auth:cashier')
        ->name('dashboard');

    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->middleware('guest:cashier')
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->middleware('guest:cashier');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest:cashier')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest:cashier');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
        ->middleware('guest:cashier')
        ->name('password.request');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->middleware('guest:cashier')
        ->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->middleware('guest:cashier')
        ->name('password.reset');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->middleware('guest:cashier')
        ->name('password.update');

    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->middleware('auth:cashier')
        ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth:cashier', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth:cashier', 'throttle:6,1'])
        ->name('verification.send');

    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->middleware('auth:cashier')
        ->name('password.confirm');

    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware('auth:cashier');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:cashier')
        ->name('logout');
});
