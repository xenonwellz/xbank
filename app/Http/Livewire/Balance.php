<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Balance extends Component
{
    public $balance;

    public function render()
    {
        $this->balance = User::find(auth()->user()->id)->balance(true);
        return view('livewire.balance');
    }
}
