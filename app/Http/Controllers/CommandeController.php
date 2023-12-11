<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CommandeController extends Controller
{
    public function show() 
    {
        return view('carte');
    }

    public function selected(Request $request)
    {        
        $choice = $request->input('base');
        $selectedBubble = DB::select("SELECT bubbletea.name, bubbletea.first_price, bubbletea.id_base, base.id, base.name AS 'nom_base' FROM bubbletea JOIN base ON bubbletea.id_base = base.id WHERE bubbletea.name LIKE \"$choice\"");    
        return view('selection', ['choice'=>$selectedBubble]);
    }
}
