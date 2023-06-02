<?php

namespace App\Http\Livewire\Clients;
use Modules\Clients\Entities\Deposit;

use Livewire\Component;

class Withdraw extends Component
{
    public $withdraw_id;
    public $amount_withdrawn;
    public $date_of_withdraw;
    
    //validate deposits
    protected $rules = [
        'amount_withdrawn'       => 'required',
    ];

    /**
     * customizing the validation messages
     */
    protected $messages = [
        'amount_withdrawn.required' => 'Amount to withdraw is required',
    ];

    public function render()
    {
        return view('livewire.clients.withdraw');
    }
    public function mount($withdraw_id)
    {
        $this->withdraw_id = $withdraw_id;
    }
    /**
     * This function saves the amount withdrawn
     */
    public function withdrawMoney()
    {
        $this->validate();
        Deposit::withdrawAmountBetted($this->withdraw_id, $this->amount_withdrawn,$this->date_of_withdraw);

        return redirect()->to('clients/transaction')->with('msg', 'Operation Successful');
    }
}
