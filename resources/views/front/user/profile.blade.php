@extends('front.user.layout')

@section('content')

<div style="background-color: #eaf2fb;">
    <div class="row">
            <div class="col-sm-3 ms-5 p-5">

                <div class="card " style="width: 18rem;border-radius:15px">
                    <img src="{{ asset('storage/admin/front/images/projects/lillah.jpg')}}" 
                    class="card-img-top mx-auto mt-4 rounded-circle shadow" style="height: 150px;width: 150px;">
                    <div class="card-body">
                        <table class="table table-borderless" style="font-size: 15px;">
                            <tr>
                                <td style="width: 90%;">Last Donation Amount</td>
                                <td style="width: 10%;">10000$</td>
                            </tr>
                            <tr>
                                <td style="width: 90%;">Total Donation</td>
                                <td style="width: 10%;">10000$</td>
                            </tr>
                            <tr>
                                <td style="width: 90%;">Minimum Donation Amount</td>
                                <td style="width: 10%;">10000$</td>
                            </tr>
                            <tr>
                                <td style="width: 90%;">Maximum Donation Amount</td>
                                <td style="width: 10%;">10000$</td>
                            </tr>
                            <tr>
                                <td style="width: 90%;">Total Donation</td>
                                <td style="width: 10%;">10000$</td>
                            </tr>
                        </table>
                        <p style="font-size: 12px;padding:10px">আলহামদুলিল্লাহ! মাসনু ফাউন্ডেশনের মাধ্যমে 
                        আপনি আজ পর্যন্ত ১00 জন অসহায় মানুষের মুখে হাসি ফুটিয়েছেন!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 ms-5 p-5">
                <div class="card m-auto mt-5" style="width: 36rem;border-radius:15px">
                    
                    <div class="card-body">
                        <p>My Profile</p>
                        <table class="table table-borderless mt-4" style="font-size: 15px;">
                            <tr>
                                <td style="width: 90%;"><i class="fa fa-phone" aria-hidden="true"></i>   01882255250</td>
                                <td style="width: 10%;font-size:10px"><a href="#"<i class="fa fa-pen"></i> Edit</a></td>
                            </tr>
                            <!-- <tr>
                                <td style="width: 90%;">Total Donation</td>
                                <td style="width: 10%;">10000$</td>
                            </tr>
                            <tr>
                                <td style="width: 90%;">Minimum Donation Amount</td>
                                <td style="width: 10%;">10000$</td>
                            </tr>
                            <tr>
                                <td style="width: 90%;">Maximum Donation Amount</td>
                                <td style="width: 10%;">10000$</td>
                            </tr>
                            <tr>
                                <td style="width: 90%;">Total Donation</td>
                                <td style="width: 10%;">10000$</td>
                            </tr> -->
                        </table>
                        
                    </div>
                </div>
            </div>
        
    </div>
</div>

@endsection