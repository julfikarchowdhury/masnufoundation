<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donator;
use Session;
use Auth;
class DonatorController extends Controller
{
    public function monthly_donator(){
        $m_donators=Donator::query();
        $m_donators =$m_donators->where('type','monthly_donator')->get()->toArray();
        return view('admin.donators.monthly_donator',compact('m_donators'));
        //return view('admin.donators.monthly_donator');
    }
    public function yearly_donator(){
        $y_donators=Donator::query();
        $y_donators =$y_donators->where('type','yearly_donator')->get()->toArray();
        return view('admin.donators.yearly_donator',compact('y_donators'));
        //return view('admin.donators.yearly_donator');
    }
    public function all_donator(){
        $all_donators=Donator::query()->get();
        
        return view('admin.donators.all_donator',compact('all_donators'));
    }
    public function add_donators(Request $request){
            
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required|unique:users|email',
        //     'password'=>'required|confirmed',
        //     'type'=>'required',
        //     'phone'=>'required',

        // ]);
        if($request->isMethod('post')){
            $message = "added successfully";
            $donator = new Donator;
            $data = $request->all();

            $donator->name = $data['name'];
            $donator->email = $data['email'];
            $donator->password = \Hash::make($data['password']);
            $donator->type = $data['type'];
            $donator->phone = $data['phone'];
            //$admin->image = $data['image'];
            $donator->status = $data['status'];
            $donator->save();

            return redirect()->back()->with('success_message',$message);
        }return view('admin.donators.add_donators');
    }
    public function viewDonatorDetails($id){
        $donator = Donator::query()->where('id',$id)->get();
        
        return view('admin.donators.view_donator',compact('donator'));
    }
}
