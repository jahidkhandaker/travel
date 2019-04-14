<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class database_controller extends Controller
{
   public function adminUp(Request $req){
    $image = file_get_contents($req->file('img'));

    $title = $req->input('title');
    $city = $req->input('city');
    $dist = $req->input('dist');


    $data=array('name'=>$title,'city'=>$city,'district'=>$dist,'img'=>$image);

    DB::table('places')->insert($data);

    echo "Successfully Uploded";

    return view('admin');
   
   }
   
}
