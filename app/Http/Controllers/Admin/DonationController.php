<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Donation;
use App\Models\Donator;

class DonationController extends Controller
{   
    public function generalDonation(Request $request){
        if ($request->ajax()) {
        //dd("hgh");
            //$donations = Donation::where('donation_type',3)->whereMonth('date', ($request->month))
                //->get();
            $donators = Donator::query()->where('type',2)->get();
            $content='';
                $content ='<div>';
                    foreach ($donators as $key => $donator) {
                        
                        $content .= '<tr>
                                        <td style="padding:15px 10px;text-align:center;">'
                                        .($key+1).
                                        '</td>
                                        <td style="padding:15px 10px;text-align:center;">'
                                            .$donator->name.                                      
                                        '</td>
                                        <td style="padding:15px 10px;text-align:center;">'
                                            .$donator->phone.
                                        '</td>';
                                        if (count(Donation::where('donator_type',($donator['id']))->whereMonth('date',($request->month))->get()) === 0)
                                        $content .= '<td style="padding:15px 10px;text-align: center; color:red;"><strong>Not Paid</strong>
                                        </td>';
                                        else
                                        $content .= '<td style="padding:15px 10px;text-align: center; color:green;"><strong>Paid</strong>
                                        </td>
                                        
                                    </tr>';
                    }
                    $content .= '</div>';
            return $content;
        
        }else{
            // $donations = Donation::leftjoin('donators','donations.donator_id','donators.id')
            //     ->select('donations.id as donations_id','donations.donator_id','donations.donator_name'
            //     ,'donations.amount','donations.date','donations.donation_type',
            //     'donations.donator_type')
            //     ->get()->toArray();
            //dd($donations);	    

            $donationDetails = Donator::query()->where('type',2)->get();	    
            //$donations = Donation::query()->get();	 ->whereMonth('date',(now()->month))  
            ///$month = (now()->month)->format('F'); 
            
            $currentMonth = now()->format('F');
            return view('admin.donations.general_donations', compact('donationDetails','currentMonth'));
        }
    }
    public function donations(Request $request){
       if ($request->ajax()) {
        
        $donations = Donation::whereMonth('date', ($request->month))
            ->get();
        $donators = Donator::query()->get();
        $content='';
            $content ='<div>';
				 foreach ($donations as $donation) {
					
					$content .= '<tr>
                                    <td style="padding:15px 10px;text-align:center;">' 
                                    .$donation->id.
                                    '</td>
                                    <td style="padding:15px 10px;text-align:center;">' 
                                    .$donation->amount.
                                    '</td>
                                    <td style="padding:15px 10px;text-align:center;">' 
                                    .$donation->donator_name.
                                    '</td>
                                    
                                    <td style="padding:15px 10px;text-align:center;">';
                                    if($donation['donator_type']== "0")
                                        $content .= 'Irregular Donator';
                                    elseif($donation['donator_type']== "1")
                                        $content .= 'Yearly Donator';
                                    else
                                        $content .= 'Monthly Donator';
                        $content .= '</td>
                                    <td style="padding:15px 10px;text-align:center;">' 
                                    .date('d-m-Y', strtotime($donation->date)).
                                    '</td>
                                    <td style="padding:15px 10px;text-align:center;">' 
                                    .Donation::find($donation->donation_type)->project()->get()->value('name').
                                    '</td>
                                    <td>
                                    <a href="'.$donation->id.'">
                                        <i style="font-size:35px;text-align: center"  class="mdi mdi-eye" 
                                        title="show detals"></i>
                                    </a> 
                                    </td>
                                </tr>';
				}
				$content .= '</div>';
        return $content;
        
        }else{
            // $donations = Donation::leftjoin('donators','donations.donator_id','donators.id')
            //     ->select('donations.id as donations_id','donations.donator_id','donations.donator_name'
            //     ,'donations.amount','donations.date','donations.donation_type',
            //     'donations.donator_type')
            //     ->get()->toArray();
            //dd($donations);	    

            $donations = Donation::query()->get();	    
            // $donators = Donator::query()->get();
            return view('admin.donations.donations', compact('donations'));
        }
    }
    public function add_edit_donations(Request $request, $id = null)
     {
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
            $donatorDetail = Donator::where('phone', 'LIKE', $request->search . '%')
                ->get();
            return response()->json([
                'success' => true, 
                'data' => $donatorDetail
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
