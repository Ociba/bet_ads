<?php

namespace Modules\SessionModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Session;

class SessionModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('sessionmodule::index');
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
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
        return view('sessionmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('sessionmodule::edit');
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
