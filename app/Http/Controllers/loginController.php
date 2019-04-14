<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class loginController extends Controller
{
    public function signin(Request $req){

    	$email = $req->input('email');
    	$userPass = $req->input('userPass');

    	$checkLogin = DB::table('user_info')->where(['email'=>$email,'userPass'=>$userPass]) ->get();
    	if(count($checkLogin) >0)
    	{
           // echo $checkLogin;
            return view('t.index');
    	}
    	else{
    		//echo "sorry";
            return view('t.layout.loginpage');
    	}
    }

    public function signUp(Request $req){

    	// $user_name = $req->input('user_name');
    	$email = $req->input('email');
    	$password = $req->input('password');
        $user_name= $req->input('user_name');

    	$check_duplicate = DB::table('user_info')->where(['email'=>$email]) ->get();

    	if(count($check_duplicate) >0){
    		echo "Email Id already exist. Please Try another one";
    	}

    	else{
    		
    		$data=array('name'=>$user_name,'email'=>$email,'userPass'=>$password);

    			DB::table('user_info')->insert($data);
    	}
    	
    	//echo "....".$email."....".$password;
        return view('t.index');
    }

    

}
