<?php

namespace App\Http\Livewire;

use App\Models\Cashier;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DepositMoney extends Component
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

        if (!$this->verified) {
            $this->error = ["account_number" => 'Could not resolve beneficiary.'];
            return;
        }

        if ($this->amount < 10) {
            $this->error = ["amount" => 'Minimum transaction amount is 10.'];
            return;
        }

        $t = new Transaction();
        $t->cashier_id = auth("cashier")->user()->id;
        $t->medium = "deposit";
        $t->type = "credit";
        $t->amount = $this->amount;
        $t->user_id = $this->beneficiary;
        $t->save();

        session()->flash('message', 'Transaction successful.');

        $this->clear();
    }

    public function render()
    {
        return view('livewire.deposit-money');
    }
}
