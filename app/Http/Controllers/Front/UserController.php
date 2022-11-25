<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
    public function Login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
        
            if(Auth::guard('user')->attempt(['email'=>$data['email'],
            'password'=>$data['password']])){                
                    return redirect('user/profile');
            }
            else{
                return redirect()->back()->with('error_massage',"Invalid Email or Password");
            }
        
        }
        return view('front.auth.login');
    }public function Register(Request $request){

        if($request->isMethod('post')){
            $user = new User;

            $data = $request->all();
    
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = \Hash::make($data['password']);
            $user->save();
            return redirect('user/profile');
        }
        return view('front.auth.register');
    }
    public function Logout(){
        Auth::guard('user')->logout();
            return redirect('/');
        
    }

    public function Profile(){
        
        return view('front.user.profile');
    }
    public function MyDonation(){
        
        return view('front.user.my_donation');
    }
    public function OnGoingDonations(){
        
        return view('front.user.on_going_donations');
    } 
}
