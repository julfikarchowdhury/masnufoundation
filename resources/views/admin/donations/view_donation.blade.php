
@extends('admin.layouts.layout')

@section('content')

<nav class="navbar " style="background-color: #f2f2f2;padding:15px">
	<h2 >Donations</h2>				
</nav>
<div class="content-wrapper">
	<div class="col-md-4 grid-margin stretch-card" style="margin: auto;">
		<div class="card">
			<div class="card-body">
            <h3 style="text-align:center; padding-bottom: 20px; text-decoration: underline;"><b>Donatoin Details</b> </h3>
				

					<div class="form-group">
						<label>Donated amount </label>
						<input class="form-control" value="{{$donationDetails['amount']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Donation Type</label>
						<input class="form-control" value="{{$donationDetails['donation_type']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Donator Name</label>
						<input class="form-control" value="{{$donationDetails['donator_name']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Donator Type </label>
						<input class="form-control" value="{{$donationDetails['donator_type']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Donated On </label>
						<input class="form-control" value="{{$donationDetails['date']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Recorded at </label>
						<input class="form-control" value="{{$donationDetails['created_at']->format('h:m')}} on {{ $donationDetails['created_at']->format('d/m/y')}}" readonly>
					</div>

					
				
			</div>
		</div>
	</div>
</div>
@endsection


