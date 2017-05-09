<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request){
    	$TenTaiKhoan =  $request['name'];
    	$password = $request['password'];
    	if(Auth::guard('taikhoan')->attempt(['TenTaiKhoan'=>$TenTaiKhoan, 'password'=>$password]))
    		return 1;
    	else 
    		return 0;
    }
}
