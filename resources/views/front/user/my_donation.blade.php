@extends('front.user.layout')

@section('content')

<div class="container-fluid" style="background-color: #eaf2fb;height: 100%;">
    <div class="row" >
            <div class="col-sm-8 m-auto pb-5" >
                <div class=" m-auto mt-5" style="text-align: center;">
                    <h3>Your Donations</h3>
                    <p>Here you will find detailed information about all your donations 
                        and can download PDF receipts
                    </p>
                </div>
                <div class="card m-auto mt-5" style="width: 46rem;border-radius:15px">
                    
                    <div class="card-body">
                        <p>My Profile</p>
                        <table class="table mt-4" style="font-size: 15px;">
                            <tr>
                                <th >Donation ID	</th>
                                <th >Paid at</th>
                                <th >Amount</th>
                                <th>Donation Type</th>
                                <th >Crteated At</th>
                                <th >Account</th>
                                <th >Action</th>

                            </tr>
                            <tr>
                                <td >Total Donation</td>
                                <td >10000$</td>
                                <td >10000$</td>
                                <td >10000$</td>
                                <td >10000$</td>
                                <td >10000$</td>
                                <td >10000$</td>

                            </tr>
                            
                        </table>
                        
                    </div>
                </div>
            </div>
        
    </div>
</div>
@endsection