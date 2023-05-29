<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Donation;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function home()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        return view('front.home', $data);
    }
    public function about()
    {
        $sliders = Slider::query()->get();


        return view('front.about', compact('sliders'));
    }
    public function DonorAndLifeTimeMemberAdd()
    {
        return view('front.donor-life-time-member');
    }


    public function projects()
    {
        $projects = Project::query()->get();


        return view('front.projects', compact('projects'));
    }
    public function gallery()
    {
        $galleryItems = Gallery::all();


        return view('front.gallery', compact('galleryItems'));
    }
    public function getGalleryImages($id)
    {
        $itemId = $id;

        // Retrieve the images for the selected gallery item using the $itemId

        // Assuming you have a GalleryItem model with a "images" relationship
        $galleryItem = Gallery::findOrFail($itemId);
        $imageNames = json_decode($galleryItem->images, true); // Decode the JSON string to get an array of image names

        // Generate the image URLs
        $imageUrls = [];
        foreach ($imageNames as $imageName) {
            $imageUrl = asset('front/images/gallery/' . $imageName);
            $imageUrls[] = $imageUrl;
        }
    
        // Return the images as a JSON response
        return response()->json(['images' => $imageUrls]);
    }
    public function contact()
    {
        //$sliders=Slider::query()->get();


        return view('front.contact');
    }
    public function donate(Request $request)
    {
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
