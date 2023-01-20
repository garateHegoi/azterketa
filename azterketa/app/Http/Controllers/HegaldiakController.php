<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hegaldia;

class HegaldiakController extends Controller
{
    public function index()
    {
        $hegaldiak = Hegaldia::all();
        return view('hegaldiak.index', ['hegaldiak' => $hegaldiak]);
    }

    public function aldatuhegaldia($id){
        $hegaldia = Hegaldia::find($id);
        return view('hegaldiak.aldatu_hegaldia', ['hegaldia' => $hegaldia]);
    }

    public function aldatuhegaldiadb(Request $request, $id){
        $hegaldia = Hegaldia::find($id);
        
        $hegaldia->irteera = $request->irteera;
        $hegaldia->helmuga = $request->helmuga;
        $hegaldia->irteeraData = $request->irteeraData;
        $hegaldia->iraupena = $request->iraupena;
        $hegaldia->save();

        return redirect()->route('hegaldiak')->with('success', 'Hegaldia updated successfully');
    }
}
