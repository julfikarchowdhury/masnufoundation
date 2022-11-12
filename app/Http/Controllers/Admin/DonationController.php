<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Donation;
use App\Models\Donator;

class DonationController extends Controller
{
    public function donations()
    {
        $donations = Donation::query()->get();	
        $donators = Donator::query()->get();
        return view('admin.donations.donations', compact('donations','donators'));
    }
    public function add_edit_donations(Request $request, $id = null)
     {
        //  $donator=Donator::where('phone',$request['donator_phone'])->get('type')->toArray();
        //  $donatorId=Donator::where('phone',$request['donator_phone'])->get('id')->toArray();
        // if (count($donatorId)>0){
        //     $donatorid=$donatorId[0]['id'];
        //     $donatortype=$donator[0]['type'];
        // }else{
        //     $donatorid=$request['donator_phone'];
        //     $donatortype='Irregular Donator';
        // }
        if ($id == "") {
            $title = "Add Donation";
            $donations = new Donation;
            $message = "Donation added successfully!";
        } else {
            $title = "Edit Donation";
            $donations = Donation::find($id);
            $message = "Donation updeted successfully!";
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            
            $donations->amount = $data['amount'];
            $donations->date = $data['date'];
            $donations->donation_type = $data['donation_type'];
            $donations->donator_id = $data['donator_id'];
            $donations->donator_name = $data['donator_name'];
            $donations->donator_type = $data['donator_type'];
            //dd( $donations );

            $donations->save();

            return redirect('admin/donations/donations')->with('success_message', $message);
        }
        return view('admin.donations.add_edit_donation')->with(compact('title', 'donations'));
    }

    public function searchNumber(Request $request)
    {
        if ($request->ajax()) {
            $getCatagories = Donator::where('phone', 'LIKE', $request->search . '%')
                ->get();
            return response()->json([
                'success' => true, 
                'data' => $getCatagories
            ]);
        }
    }
    public function donatorType(Request $request)
    {
        if ($request->ajax()) {
            $getType = Donator::where('phone', 'LIKE', $request->contact)
                ->get();
            return response()->json([
                'success' => true, 
                'data' => $getType
            ]);
        }
    }
    public function ShowDonationDetails($id){
        $donationDetails = Donation::find($id);
        
        return view('admin.donations.view_donation',compact('donationDetails'));
    }
    
}
