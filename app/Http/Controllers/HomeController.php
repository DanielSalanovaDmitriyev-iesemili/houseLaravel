<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Ni caso
    public function index(){
        return view('form');
    }
    public function store(Request $request){ 
        $location = new Location();
        $location->loc_id = $request->loc_id;
        $location->loc_desc = $request->loc_desc;
        $location->save();
        return redirect()->route('form');
    }
}
