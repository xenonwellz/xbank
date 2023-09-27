<?php

namespace App\Http\Livewire;

use App\Models\Cashier;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class WithdrawMoney extends Component
{
    public $account_number, $account_name, $verified = false, $amount = 0.00, $beneficiary, $error = [];

    public function verify_account()
    {
        $user = User::where('account_number', $this->account_number)->first();

        if ($user) {
            $this->account_name = $user->name;
            $this->verified = true;
            $this->beneficiary = $user->id;
        } else {
            $this->error = ["account_number" => 'Beneficiary not found.'];
        }
    }

    public function clear()
    {
        $this->account_number = null;
        $this->account_name = null;
        $this->amount = 0.00;
        $this->verified = false;
        $this->error = [];
    }

    public function submit()
    {
        $balance = User::find($this->beneficiary)->balance();

        $balance = $balance < 0 ? 0 : $balance;

        if ($balance < $this->amount) {
            $this->error = ["amount" => 'Insuffecient funds. Transaction amount is in excess of ' . $this->amount - $balance];
            return;
        }

        if (!$this->verified) {
            $this->error = ["account_number" => 'Could not resolve beneficiary.'];
            return;
        }

        $t = new Transaction();
        $t->cashier_id = auth("cashier")->user()->id;
        $t->medium = "withdrawal";
        $t->type = "debit";
        $t->amount = $this->amount;
        $t->user_id = $this->beneficiary;
        $t->save();

        session()->flash('message', 'Transaction successful.');

        $this->clear();
    }

    public function render()
    {
        return view('livewire.withdraw-money');
    }
}
