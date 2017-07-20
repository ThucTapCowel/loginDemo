<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
class LoginController extends Controller
{
    public function getLogin(){
        if(!Auth::check()){
    	return view('login_page');
        }else{
            return redirect()->route('admin');
        }
    }

    public function postLogin(LoginRequest $request){
        $rules=[
            'txtUser'=>'required',
            'txtPass'=>'required'
        ];

        $validator = validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->withError($validator);
        }else{

        $login =[
             'username' => $request->txtUser,
             'password' =>$request->txtPass,
             'level'=>1
             ];

             if (Auth::attempt($login)) {
                return redirect()->route('admin');
              }else{
                return redirect()->back();
              }
        }      	 
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
