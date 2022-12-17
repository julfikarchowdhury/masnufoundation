<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
        
            if((Auth::guard('donator')->attempt(['phone'=>$data['email'],
            'password'=>$data['password'],'status'=>1])) || (Auth::guard('donator')->attempt(['email'=>$data['email'],
            'password'=>$data['password'],'status'=>1])))
            {                
                    return redirect('user/profile/'.Auth::guard('donator')->user()->id);
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
        Auth::guard('donator')->logout();
            return redirect('/');
        
    }

    public function Profile($id){
        $myDonation=Donation::where('donator_id',$id)->orderBy('date', 'asc')->get();
        return view('front.user.profile',compact('myDonation'));
    }
    public function MyDonation($id){
        $myDonations=Donation::where('donator_id',$id)->orderBy('created_at', 'asc')->get();
        return view('front.user.my_donation',compact('myDonations'));
    }
    public function OnGoingDonations(){
        
        return view('front.user.on_going_donations');
    } 
    public function donate(Request $request,$id){
        $donationDetails=Donation::where('id',$id)->get()->toArray();
        $donatorDetails=Donator::where('id',$donationDetails[0]['donator_id'])->get()->toArray();

        //dd($donatorDetails[0]);
        if($request->isMethod('post')){
            $donations = new Donation;

            $data = $request->all();
                
            $donations->amount = $data['amount'];
            $donations->date = now();
            $donations->donation_type = $donationDetails[0]['donation_type'];
            $donations->donator_id = $donatorDetails[0]['id'];
            $donations->donator_name = $donatorDetails[0]['name'];
            $donations->donator_type = $donatorDetails[0]['type'];
            $donations->save();
            $message = "donation successfull";
            return redirect('user/my-donation/'.$donatorDetails[0]['id'])->with('success_message', $message);
        }
        return view('front.user.donate',compact('donatorDetails','donationDetails'));
    }
}
