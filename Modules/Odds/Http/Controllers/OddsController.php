<?php

namespace Modules\Odds\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OddsController extends Controller
{
    public function getSessionData(Request $request)
    {
        $odd_selected = $request->session()->all();
        //dd($odd_selected);

        // You can also use the following to get the value or a default value if it doesn't exist
        // $value = $request->session()->get('key', 'default');
        $odd_selected = session()->get('alert', 'success');
        
        return view('welcome',['odd_selected' => $odd_selected]);
    }
    /**
     * Displays all the odds added
     */
    protected function odds(){
        return view('odds::odds');
    }
    /**
     * This function for now adds odds to database
     */
    public static function addOdds(){
        return view('odds::add-odds');
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('odds::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('odds::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('odds::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
