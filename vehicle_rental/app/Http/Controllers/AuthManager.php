<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function signin(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('sign_in');
    }

    function signup(){
        return view('sign_up');
    }

    function signin_post(Request $request){
       $request->validate([

        'email'=> 'required',
        'password'=>'required'

       ]);

       $credentials= $request->only('email','password');
       if(Auth::attempt($credentials)){
        return redirect()->intended(route('home'));
       }
       else{
        return redirect(route('signin'))->with("error","LogIn Details are not valid!!");
       }
    }

    function signup_post(Request $request){
        $request->validate([
            'name'=> 'required',
            'username'=> 'required|unique:users',
            'address'=> 'required',
            'contact_number'=> 'required',
            'DOB'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=>'required'
            
    
           ]);

        //    $data['Fullname']= $request->name;
        //    $data['Username']= $request->username;
        //    $data['Address']= $request->address;
        //    $data['Contact Number']= $request->contact_number;
        //    $data['Date_of_Birth']= $request->DOB;
        //    $data['email']= $request->email;
        //    $data['password']= Hash::make($request->password);
        
        //    $user = User::create($data);
           $user = User::create([
            'Fullname'=> $request->name,
            'Username'=> $request->username,
            'Address'=> $request->address,
            'Contact Number'=> $request->contact_number,
            'Date_of_Birth'=> $request->DOB,
            'email'=>  $request->email,
            'password'=>Hash::make($request->password),
            
    
           ]);

           if(!$user){
            return redirect(route('signup'))->with("error","Registration Failed, try again!!");
           }
           else{
            return redirect(route('signin'))->with("success","Registration successfully done, LogIN to access the app");
           }

     }

     function logout(){
        Session::flush();
        Auth::logout();

        return redirect(route('signin'));

     }


}
