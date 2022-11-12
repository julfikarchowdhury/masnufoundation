
@extends('admin.layout.layout')

@section('content')


<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0">
					<h3 class="font-weight-bold">donator</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card">
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
						<label>Donated at </label>
						<input class="form-control" value="{{$donationDetails['date']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Recorded at </label>
						<input class="form-control" value="{{$donationDetails['created_at']}}" readonly>
					</div>

					
				
			</div>
		</div>
	</div>
</div>
@endsection


