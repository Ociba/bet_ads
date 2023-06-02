<?php

namespace Modules\Odds\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Session;

class AddedOdssController extends Controller
{
    public function saveSessionData($oddValue, $id, $name)
    {
        if(Session::has('advertOdd'.$id)){
            Session::forget('advertOdd'.$id);
        }else{
            Session::put('advertOdd'.$id, ['odd'=>$oddValue, 'advertId'=>$id, "advertName" => $name]);
        }

        // You can also flash data to the next request using the following
        return redirect()->back();
        //dd($oddValue, $id, $name);
    }

    

    
}
