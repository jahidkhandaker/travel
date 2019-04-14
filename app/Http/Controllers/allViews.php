<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class allViews extends Controller
{
    
	public function viewPlaces()
	{

		 $p = DB::table('places')->get();
		
		 return view('t.destination', ['pal' => $p]);
        
    }

    public function hotelresto()
	{

		 $p = DB::table('places')->get();
		
		 return view('t.destination', ['pal' => $p]);
        
    }

    public function guides()
	{

		 $p = DB::table('places')->get();
		
		 return view('t.destination', ['pal' => $p]);
        
    }
	

}
