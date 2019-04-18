<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class allViews extends Controller
{
    
	public function viewPlaces()
	{

	
	
		$p = DB::select('SELECT * FROM places ');

		 return view('index', ['pal' => $p]);
        
    }	

    public function demo(Request $req)
	{

		$e = $req->input('v');

		$dp = DB::select('SELECT * FROM places WHERE places.pName= ?',[$e]);

		$ds = DB::select('SELECT * FROM places INNER JOIN hotels ON places.pId=hotels.hpId AND places.pName= ?',[$e]);
		
		$dg = DB::select('SELECT * FROM places INNER JOIN guides ON places.pId=guides.gpId AND places.pName= ?',[$e]);


		return view('demoo', ['place' => $dp] , ['hotel' => $ds] ,['guide' => $dg]);
       
    }
   
}
