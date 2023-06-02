<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Session;

class Betslip extends Component
{
    public function render()
    {
        return view('livewire.front.betslip',[
            'odd_selected' =>Session::all()
            
        ]);
    }
}
