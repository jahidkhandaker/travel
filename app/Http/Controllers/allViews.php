<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class allViews extends Controller
{
    
	public function viewPlaces()
	{

		 //$p = DB::table('places')->get();
	
		$p = DB::select('select * from places ');

		 return view('index', ['pal' => $p]);
        
    }	

    public function demo(Request $req)
	{

		$e = $req->input('v');

		$ds = DB::select('SELECT * FROM places INNER JOIN hotels ON places.pId=hotels.hpId AND places.pName= ?',[$e]);

		$dp = DB::select('SELECT * FROM places WHERE places.pName= ?',[$e]);

		return view('demoo', ['dem' => $ds] , ['demp' => $dp]);
       
    }
   
}
