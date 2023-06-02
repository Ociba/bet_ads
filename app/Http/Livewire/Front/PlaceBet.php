<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Modules\Clients\Entities\Deposit;
use Session;
use Modules\Commission\Entities\Commission;
use Modules\Marketiers\Entities\Marketier;
use Modules\Clients\Entities\Client;
use App\Models\User;

class PlaceBet extends Component
{
    public $total_odds;
    public $amount;
    public $user_id;
    public $client_name;
    public $commission;
    public $client_id;
    public $marketier_id;

    //validate deposits
    protected $rules = [
        'total_odds'       => '',
        'amount'         => 'required',
    ];

    /**
     * customizing the validation messages
     */
    protected $messages = [
        'amount.required' => 'Amount is required',
    ];
    public function render()
    {
        return view('livewire.front.place-bet',[
            'odd_selected' =>Session::all()
        ]);
    }
    /**
     * This function creates deposits
     */
    public function submit()
    {
        $this->validate();
        $this->emit('Deposit', 'refreshComponent');
        $this->calculateCommission();
        Deposit::addDeposit($this->total_odds,$this->amount);
        $this->closeModal();
        Session::flash('msg', 'Deposit is successful sent');
    }

    private function calculateCommission(){
        $commission = ($this->total_odds*$this->amount) * 0.2;
        Commission::create([
            'commission'   =>$commission,
            'marketier_id' =>$this->marketier_id,
            'client_id'    =>auth()->user()->id
        ]);
    }
    public function mount(){
        $this->fill([
            'marketier_id' => User::where('users.id',auth()->user()->id)
                ->value('users.loggedin_marketier_id'),
        ]);
    }
}
