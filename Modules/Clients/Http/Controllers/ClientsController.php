<?php

namespace Modules\Clients\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ClientsController extends Controller
{
    /**
     * Display clients deposits.
     */
    public function getMyDeposit()
    {
        return view('clients::deposit');
    }
    /**
     * This function gets the transactions for the clients
     */
    public function transactions(){
        return view('clients::transaction');
    }
    /**
     * This function gets page for withrawing cash
     */
    public function withdrawNow($withdraw_id){
        if (! request()->hasValidSignature()) {
            abort(401);
        }
        return view('clients::withdraw',compact('withdraw_id'));
    }
}
