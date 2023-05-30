<?php

namespace App\Http\Controllers\Front;

use App\Enum\CommonStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Traits\FileUploadTrait;
use App\Models\Donation;
use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use App\Models\Donator;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    use FileUploadTrait;
    public function Login(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            if ((Auth::guard('donator')->attempt([
                'phone' => $data['email'],
                'password' => $data['password'], 'status' => 1
            ])) || (Auth::guard('donator')->attempt([
                'email' => $data['email'],
                'password' => $data['password'], 'status' => 1
            ]))) {
                return redirect('user/profile/' . Auth::guard('donator')->user()->id);
            } else {
                return redirect()->back()->with('error_massage', "Invalid Email or Password");
            }
        }
        return view('front.auth.login');
    }

    public function Logout()
    {
        Auth::guard('donator')->logout();
        return redirect('/');
    }
    public function Profile($id)
    {
        $myDonation = Donation::where('donator_id', $id)->orderBy('date', 'asc')->get();
        $myDonations = Donation::where('donator_id', $id)->orderBy('created_at', 'asc')->get();
        $donationDetails = Donation::where('id', $id)->get()->toArray();
        $donatorDetails = Donator::where('id', 1)->get()->toArray();
        $projects = Project::all();
        return view('front.user.profile', compact('myDonation', 'myDonations', 'donationDetails', 'donatorDetails', 'projects'));
    }
}
