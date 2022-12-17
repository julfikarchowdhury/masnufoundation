@extends('front.user.layout')

@section('content')
<? use App\Models\Donation; ?>


<div class="container-fluid" style="background-color: #eaf2fb;height: 100%;">
    <div class="row" >
            <div class="col-sm-8 m-auto pb-5" >
                <div class=" m-auto mt-5" style="text-align: center;">
                    <h3>Your Donations</h3>
                    <p>Here you will find detailed information about all your donations 
                        and can download PDF receipts
                    </p>
                </div>
                <div class="card m-auto mt-5 shadow-lg" style="width: 46rem;border-radius:15px">
                <div  style="padding:10px 20px;border-top-left-radius:15px;
                    border-top-right-radius:15px;background-color:#00802b;color:white;text-align:center;">
                        <h3>Donations</h3>
                    </div>
                    <div class="card-body">
                    
                        <table class="table mt-4" style="font-size: 15px;">
                            <tr>
                                <th >Donation ID</th>
                                <th >Paid at</th>
                                <th >Amount</th>
                                <th>Donation Type</th>
                                <th >Account</th>
                                <th >Action</th>

                            </tr>
                            @foreach($myDonations as $key => $my_donation)
                            <tr>
                                <td >{{$key+1}}</td>
                                <td > {{ $my_donation['created_at']->format('h:i  A')}}<br>
                                    {{ $my_donation['created_at']->format('d-M-y')}}</td>
                                <td >{{$my_donation->amount}}</td>
                                <td >{{Donation::find($my_donation['donation_type'])->project()->get()->value('name'); }}</td>
                                <td >bKash</td>
                                <td ><a class="btn" style="color: green;" href="donate/{{$my_donation->id}}"> Donate Again</a></td>

                            </tr>
                            @endforeach
                        </table>
                        
                    </div>
                </div>
            </div>
        
    </div>
</div>
@endsection