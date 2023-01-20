<?php

namespace App\Http\Controllers;

use App\Models\HegaldiakAPI;
use Illuminate\Http\Request;

class hegaldiakAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HegaldiakAPI::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hegaldiaAPI = new HegaldiakAPI;
        $hegaldiaAPI->irteera = $request->irteera;
        $hegaldiaAPI->save();
        return $hegaldiaAPI;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HegaldiakAPI  $hegaldiaAPI
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hegaldiaAPI = HegaldiakAPI::find($id);
        return $hegaldiaAPI;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hegaldiaAPI  $hegaldiaAPI
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HegaldiakAPI  $hegaldiaAPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(HegaldiakAPI $hegaldiaAPI)
    {
        $hegaldiaAPI->delete();
        return response()->json(null); 
    }
}
