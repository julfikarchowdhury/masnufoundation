<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Slider;
use App\Models\Donator;
use App\Models\Expense;
use Auth;
class AdminController extends Controller
{
    public function dashboard(){
        $donators = Donator::query();
        $y_donators=Donator::where('type',"yearly_donator")->count(); 
        $m_donators=Donator::where('type',"monthly_donator")->count();
        $irr_donators=Donator::where('type',"irregular_donator")->count();
        // $t_donators = $donators->get()->toArray();
        $expenses = Expense::query()->get();

        return view('admin.dashboard',compact('donators','y_donators','m_donators','irr_donators','expenses'));
    }

    //adsmins
    public function admins(){
        $adminDetails=Admin::query();
        $adminDetails=$adminDetails->get()->toArray();

        return view('admin.admins.admins',compact('adminDetails'));
    }
    
    public function add_edit_admin(Request $request,$id=null){
            
            // $request->validate([
            //     'name'=>'required',
            //     'email'=>'required|unique:users|email',
            //     'password'=>'required|confirmed',
            //     'type'=>'required',
            //     'phone'=>'required',

            // ]);
        if($id==""){
            $title = "Add Admin";
            $admin = new Admin;
            $message = "Admin added successfully!";
        }else{
            $title = "Edit Admin";
            $admin = Admin::find($id);
            $message = "Admin updeted successfully!";
        }
        if($request->isMethod('post')){
            //$message = "added successfully";
            
            $data = $request->all();

            $admin->name = $data['name'];
            $admin->email = $data['email'];
            $admin->password = \Hash::make($data['password']);
            $admin->type = $data['type'];
            $admin->phone = $data['phone'];
            //$admin->image = $data['image'];
            if ($request->hasFile('image')){
                $image = $request->image;
                $name = $image->getClientOriginalName();
                $image->storeAs('public/admin/images/admin-images',$name);
                // $banner = new BannerImage;
                $admin->image = $name;
            }
            $admin->status = $data['status'];
            $admin->save();

            return redirect('admin/admins/admins')->with('success_message',$message);
        }return view('admin.admins.add_edit_admins')->with(compact('title','admin'));
    }
    public function deleteAdmin($id){
        Admin::where('id',$id)->delete();
        $message = "Admin has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);

    }

    //collections
    public function collections(){
        return view('admin.collections.collections');
    }

    //donators
    
    
    

    //expenses
    public function expenses(){
        return view('admin.expenses.expenses');
    }

    //new_members
    public function new_members(){
        return view('admin.members.new_members');
    }

    //received_ammounts
    public function received_ammounts(){
        return view('admin.received_ammounts.received_ammounts');
    }

    public function login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
        
        if(Auth::guard('admin')->attempt(['type'=>$data['type'],'email'=>$data['email'],'password'=>$data['password'],'status'=>1])){
            if ($data['type'] == "user"){
                return ("my account");
            }else{
            return redirect('admin/dashboard');}
            }
        
        }
        return view('auth.login');
    }
    public function logout(){
        Auth::guard('admin')->logout();
            return redirect('admin/login');
        
    }


    public function slider(){
        $sliders=Slider::query();
        $sliders=$sliders->get()->toArray();
        return view('admin.front_page_customization.slider.slider',compact('sliders'));
    }

    public function add_edit_slider(Request $request,$id=null){
        if($id==""){
            $title = "Add Slider";
            $slider = new Slider;
            $message = "Slider added successfully!";
        }else{
            $title = "Edit Slider";
            $slider = Slider::find($id);
            $message = "Slider updeted successfully!";
        }
        if($request->isMethod('post')){
            //$message = "added successfully";
            
            $data = $request->all();

            $slider->about = $data['description'];
            $slider->tags = $data['tags'];
            //$admin->image = $data['image'];
            if ($request->hasFile('image')){
                $image = $request->image;
                $name = $image->getClientOriginalName();
                $image->storeAs('public/admin/front/images/sliders',$name);
                // $banner = new BannerImage;
                $slider->image = $name;
            }
            $slider->status = $data['status'];
            $slider->save();

            return redirect('admin/front-page-customization/slider/slider')->with('success_message',$message);
        }return view('admin.front_page_customization.slider.add_edit_slider')->with(compact('title','slider'));
    }
    public function delete_slider($id){
        Slider::where('id',$id)->delete();
        $message = "Slider has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);

    }

    
}
