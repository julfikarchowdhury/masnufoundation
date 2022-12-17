@extends('front.user.layout')

@section('content')
<? use App\Models\Donation; ?>

<div style="background-color: #eaf2fb;">
    <div class="row">
            <div class="col-3 ms-5 p-5">

                <div class="card " style="width: 18rem;border-radius:15px">
                    <img src="{{ asset('storage/admin/images/donators/'.Auth::guard('donator')->user()->image)}}" 
                    class="card-img-top mx-auto mt-4 rounded-circle shadow" style="height: 150px;width: 150px;">
                    <div class="card-body">
                        <table class="table table-borderless" style="font-size: 15px;">
                            
                        </table>
                        <p style="font-size: 12px;padding:10px">আলহামদুলিল্লাহ! মাসনু ফাউন্ডেশনের মাধ্যমে 
                        আপনি আজ পর্যন্ত ১00 জন অসহায় মানুষের মুখে হাসি ফুটিয়েছেন!</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-3"></div> -->
            <div class="col-5  mx-auto p-5">
                
                        <form class="p-4 shadow-lg div-white" style="width: 26rem;border-radius:15px" action="{{ url('user/my-donation/donate/'.$donationDetails[0]['id'])}}" method="post">@csrf
                            <div class="col-auto m-4 ">
                                <label for="amount"> Donation Fund</label>
                                <input type="text" class="form-control" placeholder="Donation Fund" name="donation_type"
                                value="{{Donation::find($donationDetails[0]['donation_type'])->project()->get()->value('name'); }}" readonly>
                            </div>
                            <div class="col-auto m-4 ">
                                <label for="amount"> Donator's Phone</label>
                                <input type="phone" class="form-control" placeholder="phone" name="phone"
                                value="{{$donatorDetails[0]['phone']}}" readonly>
                            </div>
                            <div class="col-auto m-4 ">
                                <label for="amount"> Amount</label>
                                <input type="number" class="form-control" placeholder="Donate Amount" name="amount" 
                                >
                            </div>
                            <div style="text-align: center;padding-top:30px">
                                <button type="submit" class="btn btn-success mb-3 px-5">Donate</button>
                            </div>
                        </form>
                        
            </div>
        
    </div>
</div>

@endsection