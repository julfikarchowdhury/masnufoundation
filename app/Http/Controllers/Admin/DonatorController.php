<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donator;
use Session;
use Auth;
use Hash;
class DonatorController extends Controller
{
    public function monthly_donator(){
        $m_donators=Donator::query();
        $m_donators =$m_donators->where('type','2')->get()->toArray();//2 indicate monthly donator
        return view('admin.donators.monthly_donator',compact('m_donators'));
    }
    public function yearly_donator(){
        $y_donators=Donator::query();
        $y_donators =$y_donators->where('type','1')->get()->toArray();//1 indicate yearly donator
        return view('admin.donators.yearly_donator',compact('y_donators'));
    }
    public function all_donator(){
        $all_donators=Donator::query()->get();
        
        return view('admin.donators.all_donator',compact('all_donators'));
    }
    public function new_donator(){
        $new_donators=Donator::where('status',"0")->get();
        
        return view('admin.donators.new_donator',compact('new_donators'));
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
            $message = "Form Submitted successfully";
            $donator = new Donator;
            $data = $request->all();

            $donator->name = $data['name'];
            $donator->father_name = $data['fatherName'];
            $donator->mother_name = $data['motherName'];
            $donator->age = $data['age'];
            $donator->profession = $data['profession'];
            $donator->nationality = $data['nationality'];
            $donator->relegion = $data['relegion'];
            $donator->NID = $data['nationalId'];
            $donator->birth_id = $data['birthId'];
            $donator->permanent_address = $data['permanentAddress'];
            $donator->present_address = $data['presentAddress'];
            $donator->email = $data['email'];
            $donator->password = Hash::make($data['password']);
            $donator->type = "1";//1 indicate yearly donator
            $donator->phone = $data['phone'];
            if ($request->hasFile('image')){
                $image = $request->image;
                $name = $image->getClientOriginalName();
                $image->storeAs('public/admin/images/donators',$name);
                // $banner = new BannerImage;
                //dd($name);
                $donator->image = $name;
            }
            $donator->status = "0";
            $donator->save();

            return redirect()->back()->with('success_message',$message);
        }return view('admin.donators.add_donators');
    }
    public function viewDonatorDetails($id){
        $donator = Donator::find($id);
        
        return view('admin.donators.view_donator',compact('donator'));
    }
    public function deleteDonator($id){
        Donator::where('id',$id)->delete();
        $message = "Donator has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);

    }
    public function approveDonator($id){
        $donator = Donator::find($id);
        
        $message = "Donator Approved";
        $donator->status = "1";
        $donator->save();

        return redirect()->back()->with('success_message',$message);
    }
}
