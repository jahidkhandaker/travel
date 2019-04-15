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
		
		//$p = DB::select('select * from places where active = ?', [1]);
		$p = DB::select('select * from places ');

		 return view('index', ['pal' => $p]);
        
    }	

    public function demo(Request $req)
	{

		$e = $req->input('v');

		 //$d = DB::table('places')->get();
		$d = DB::select('select * from hotels');
		
		 return view('demo', ['demo' => $d]);

       
    }
   
}
