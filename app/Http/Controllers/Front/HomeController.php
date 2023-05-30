<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Donation;
use App\Models\Gallery;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    use FileUploadTrait;
    public function home()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        return view('front.home', $data);
    }
    public function about()
    {
        return view('front.about',);
    }
    public function DonorAndLifeTimeMember()
    {
        return view('front.donor-life-time-member');
    }
    public function DonorAndLifeTimeMemberAdd(User $user, UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $image = null;
            // Handle image upload
            if ($request->hasFile('image') && $request->file('image')) {
                $image = $this->fileUpload($request->file('image'), 'user/images/');
            }
            $user->create([
                'type' => $request->type,
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'profession' => $request->profession,
                'father_name' => $request->father_name,
                'address' => $request->address,
                'phone' => $request->phone,
                'image' => $image,
            ]);
            DB::commit();
            return redirect()->route('donor-life-time-member')
                ->with('success_message', "Form submitted successfully.");
        } catch (Exception $e) {
            DB::rollback();
            Log::debug('DonorAndLifeTimeMemberAdd create => ' . $e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine());
            return back()->withErrors($e->getMessage())->withInput();
        }
    }
    public function projects()
    {
        $data['projects'] = Project::all();
        return view('front.projects', $data);
    }
    public function gallery()
    {
        return view('front.gallery');
    }
    public function getGalleryImages($id)
    {
        // Assuming you have a GalleryItem model with a "images" relationship
        $galleryItem = Gallery::findOrFail($id);
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
