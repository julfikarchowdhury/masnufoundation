<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Project;

class HomeController extends Controller
{
    public function dashboard(){
        $sliders=Slider::query()->get();
        $projects=Project::query()->get();


        return view('front.dashboard',compact('sliders','projects'));
    }
    public function about(){
        $sliders=Slider::query()->get();
        

        return view('front.about',compact('sliders'));
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
        $sliders=Slider::query()->get();
        

        return view('front.contact',compact('sliders'));
    }
}
