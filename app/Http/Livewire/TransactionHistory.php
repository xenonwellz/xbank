<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TransactionHistory extends Component
{
    public $transactions;

    public function render()
    {
        $this->transactions = Transaction::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('livewire.transaction-history');
    }
}
