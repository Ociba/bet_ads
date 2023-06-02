<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Modules\Odds\Entities\Odd;
use LivewireUI\Modal\ModalComponent;
use Session;

class AddAdsOdds extends ModalComponent
{
    public $odd;
    public $ads_name;

    //validate category
    protected $rules = [
        'odd'      => 'required',
        'ads_name' => 'required',
    ];


    public function render()
    {
        return view('livewire.admin.add-ads-odds');
    }
    /**
     * This function creates odds
     */
    public function submit()
    {
        $this->validate();
        $this->emit('Front.Odds', 'refreshComponent');
        $this->emit('Admin.Odds', 'refreshComponent');
        Odd::addOdds($this->odd,$this->ads_name);
        //activity()->log(auth()->user()->name.' Added a new Category called '.$this->category);
        $this->closeModal();
        Session::flash('msg', 'Operation Successful');
    }
}
