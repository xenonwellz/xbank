<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'account_number',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function balance($str = false)
    {
        $balance = 0;

        $credits = $this->transactions()->where('type', 'credit')->get();
        $debits = $this->transactions()->where('type', 'debit')->get();

        foreach ($credits as $credit) {
            $balance += $credit->amount;
        }

        foreach ($debits as $debit) {
            $balance -= $debit->amount;
        }

        // ₦

        if ($str) {
            if ($balance < 0) {
                $balance = abs($balance);
                $balance = "-" . "₦" . $balance;
            } else {
                $balance = "₦" . $balance;
            }
        }


        return $balance;
    }
}
