<?php

namespace Modules\Odds\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class AddedOdssController extends Controller
{
    public function saveSessionData($oddValue, $id, $name)
    {
        $sessionKey = 'selectedOdds';

        // Retrieve the existing session data
        $selectedOdds = session($sessionKey, []);

        // Check if the item already exists in the session
        $index = array_search($id, array_column($selectedOdds, 'id'));

        if ($index !== false) {
            // Item already exists, remove it from the session
            unset($selectedOdds[$index]);
        } else {
            // Item doesn't exist, add it to the session
            $selectedOdds[] = ['id' => $id, 'oddValue' => $oddValue, 'oddName' => $name];
        }

        // Update the session data
        session([$sessionKey => $selectedOdds]);
        info(Session::get("selectedOdds"));

        return redirect()->back();
    }







}
