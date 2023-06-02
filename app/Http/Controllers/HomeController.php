<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getSessionData(Request $request)
    {
        $odd_selected = $request->session()->all();
        //dd($odd_selected);

        // You can also use the following to get the value or a default value if it doesn't exist
        // $value = $request->session()->get('key', 'default');
        
        return view('welcome',['odd_selected' => $odd_selected]);
    }
    //This function gets the pages to place bet after loggin
    //Save the bet odds to the dtabase
    public function placeBetNow(Request $request){
        $odd_selected = $request->session()->all();
        return view('place_bet',['odd_selected' => $odd_selected]);
    }
}
