<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Donation;

class HomeController extends Controller
{
    public function dashboard(){
        $sliders=Slider::query()->get();
        $projects=Project::where('status',1)->get();


        return view('front.dashboard',compact('sliders','projects'));
    }
    public function about(){
        $sliders=Slider::query()->get();
        

        return view('front.about',compact('sliders'));
    }
    public function DonorAndLifeTimeMemberAdd(){
        return view('front.donor-life-time-member');
    }
    
    
    public function projects(){
        $projects=Project::query()->get();
        

        return view('front.project.projects',compact('projects'));
    }
    public function gallery(){
        $sliders=Slider::query()->get();
        

        return view('front.gallery',compact('sliders'));
    }
    public function contact(){
        //$sliders=Slider::query()->get();
        

        return view('front.contact');
    }
    public function donate(Request $request){
        $donations = new Donation;

        $data = $request->all();
            
        $donations->amount = $data['amount'];
        $donations->date = now();
        $donations->donation_type = $data['donation_type'];
        $donations->donator_id = $data['donator_id'];
        $donations->donator_name = $data['donator_name'];
        $donations->donator_type = '0';
        $donations->save();
        $message = "donation successfull";
        return redirect('/')->with('success_message', $message);;
    }
}
