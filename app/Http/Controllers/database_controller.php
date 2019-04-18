<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class database_controller extends Controller
{
   public function adminPlacesUp(Request $req){
    $pImg = file_get_contents($req->file('pImg'));

    $pName = $req->input('pName');
    $pCity = $req->input('pCity');
    $pDistrict = $req->input('pDistrict');
    $pDescription = $req->input('pDescription');
    $pAbout1 = $req->input('pAbout1');
    $pAbout2 = $req->input('pAbout2');
    


    $data=array('pName'=>$pName, 'pCity'=>$pCity, 'pDistrict'=>$pDistrict, 'pDescription'=>$pDescription, 'pAbout1'=>$pAbout1, 'pAbout2'=>$pAbout2, 'pName'=>$pName, 'pImg' => $pImg );

    DB::table('places')->insert($data);

    echo "Successfully Uploded";
            
    $p = DB::select('SELECT * FROM places ');

    return view('admin', ['pal' => $p]);
   
   }

   public function adminHotelsUp(Request $req){
    $hImg = file_get_contents($req->file('hImg'));

    $hpId = $req->input('hpId');
    $hName = $req->input('hName');
    $hCity = $req->input('hCity');
    $hDistrict = $req->input('hDistrict');
    $hDescription = $req->input('hDescription');
    $hContact = $req->input('hContact');
    $hAbout2 = $req->input('hAbout2');
    


    $data=array('hName'=>$hName, 'hCity'=>$hCity, 'hDistrict'=>$hDistrict, 'hpId'=>$hpId, 'hDescription'=>$hDescription, 'hContact'=>$hContact, 'hAbout2'=>$hAbout2,  'hImg' => $hImg );

    DB::table('hotels')->insert($data);

    echo "Successfully Uploded";
            
    $p = DB::select('SELECT * FROM places ');

    return view('admin', ['pal' => $p]);
   
   }

   public function reservation(Request $req)
   {
        $cName = $req->input('cName');
        $cAddress = $req->input('cAddress');
        $cMobile = $req->input('cMobile');
        $cEmail = $req->input('cEmail');
        $cQuantity = $req->input('cQuantity');
        $rsHotel = $req->input('rsHotel');
        $rsRoomtype = $req->input('rsRoomtype');
        $rsRoomQuantity = $req->input('rsRoomQuantity');
        $checkin = $req->input('checkin');
        $checkout = $req->input('checkout');

        $data=array('cName'=>$cName, 'cAddress'=>$cAddress, 'cMobile'=>$cMobile, 'cEmail'=>$cEmail, 'cQuantity'=>$cQuantity, 'rsHotel'=>$rsHotel, 'rsRoomtype'=>$rsRoomtype, 'rsRoomQuantity'=>$rsRoomQuantity,  'checkin' => $checkin ,'checkout' => $checkout );


        DB::table('reservation')->insert($data);

        echo "Successfully Uploded";

        $p = DB::select('SELECT * FROM places ');

         return view('index', ['pal' => $p]);

   }
   
}
