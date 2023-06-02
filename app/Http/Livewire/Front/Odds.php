<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Modules\Odds\Entities\Odd;

class Odds extends Component
{
    protected $listeners = ['Odds' => '$refresh'];

    public function render()
    {
        return view('livewire.front.odds',[
            'odds' => Odd::getBetOdds(),
        ]);
    }
    public function saveSessionData($oddValue, $id, $name)
    {
        if(Session::has('advertOdd'.$id)){
            Session::forget('advertOdd'.$id);
        }else{
            Session::put('advertOdd'.$id, ['odd'=>$oddValue, 'advertId'=>$id, "advertName" => $name]);
        }

        // You can also flash data to the next request using the following
        //return redirect()->back();
        Session::flash('msg', 'advert creation is successful');
    }
}
