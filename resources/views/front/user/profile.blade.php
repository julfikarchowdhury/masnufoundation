@extends('front.user.layout')

@section('content')

<div style="background-color: #eaf2fb;">
    <div class="row">
            <div class="col-sm-3 ms-5 p-5">

                <div class="card  shadow-lg" style="width: 18rem;border-radius:15px">
                    <img src="{{ asset('storage/admin/images/donators/'.Auth::guard('donator')->user()->image)}}" 
                    class="card-img-top mx-auto mt-4 rounded-circle shadow" style="height: 150px;width: 150px;">
                    <div class="card-body">
                        <table class="table table-borderless" style="font-size: 15px;">
                            <tr>
                                <td style="width: 70%;">Last Donation Amount</td>
                                <td style="width: 30%;">{{$myDonation->value('amount')}} TK</td>
                            </tr>
                            
                            <tr>
                                <td style="width: 70%;">Minimum Donation Amount</td>
                                <td style="width: 30%;">{{$myDonation->min('amount')}} TK</td>
                            </tr>
                            <tr>
                                <td style="width: 70%;">Maximum Donation Amount</td>
                                <td style="width: 30%;">{{$myDonation->max('amount')}} TK</td>
                            </tr>
                            <tr>
                                <td style="width: 70%;">Total Donation</td>
                                <td style="width: 30%;">{{$myDonation->sum('amount')}} TK</td>
                            </tr>
                        </table>
                        <p style="font-size: 12px;padding:10px">আলহামদুলিল্লাহ! মাসনু ফাউন্ডেশনের মাধ্যমে 
                        আপনি আজ পর্যন্ত ১00 জন অসহায় মানুষের মুখে হাসি ফুটিয়েছেন!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 ms-5">
                <div class="card m-auto my-5 shadow-lg" style="width: 36rem;border-radius:15px ;">
                    <div  style="padding:10px 20px;width: 36rem;border-top-left-radius:15px;
                    border-top-right-radius:15px;background-color:#00802b;color:white">
                        <h4>My Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row m-2">
                            <div class="mx-2 ">
                                <p > Name:   {{Auth::guard('donator')->user()->name}}
                                    <br><br>Profession:   {{Auth::guard('donator')->user()->profession}}
                                    <br><br>Age:   {{Auth::guard('donator')->user()->age}}
                                    <br><br>Mobile No:   {{Auth::guard('donator')->user()->phone}}
                                    <br><br>Email:   {{Auth::guard('donator')->user()->email}}
                                    <br><br>Father Name:   {{Auth::guard('donator')->user()->father_name}}
                                    <br><br>Mother Name:   {{Auth::guard('donator')->user()->mother_name}}
                                    <br><br>Permanent Address:   {{Auth::guard('donator')->user()->permanent_address}}
                                    <br><br>Present Address:   {{Auth::guard('donator')->user()->present_address}}
                                    <br><br>Nationality:   {{Auth::guard('donator')->user()->nationality}}
                                    <br><br>Relegion:   {{Auth::guard('donator')->user()->relegion}}
                                    <br><br>National ID:   {{Auth::guard('donator')->user()->NID}}
                                    <br><br>Birth Certificate ID:   {{Auth::guard('donator')->user()->birth_id}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection