<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class AdminTransactionHistory extends Component
{
    public $transactions;

    public function render()
    {
        $this->transactions = Transaction::orderBy('created_at', 'desc')
            ->get();
        return view('livewire.admin-transaction-history');
    }
}
