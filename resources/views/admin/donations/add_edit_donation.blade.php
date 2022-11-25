@extends('admin.layout.layout')


@section('content')
<nav class="navbar " style="background-color: #f2f2f2;padding:15px">
	<h2 >Donations</h2>				
</nav>
<div class="content-wrapper">
	<div class="col-md-4 grid-margin stretch-card" style="margin: auto;">
		<div class="card">
			<div class="card-body">
				<h3 style="text-align:center; padding-bottom: 20px; text-decoration: underline;"><b>{{ $title}}</b> </h3>



				<form class="forms-sample" 
					@if(empty($donations['id'])) 
					action="{{ url('admin/donations/add-edit-donations/') }}" @else 
					action="{{ url('admin/donations/add-edit-donations/'.$donations['id']) }}" 
					@endif method="post" 
					enctype="multipart/form-data">@csrf

					<div class="form-group">
						<label for="amount"> Amount</label>
						<input type="number" class="form-control" id="amount" placeholder="Enter amount" 
						name="amount" @if(!empty($donations['amount'])) value="{{ $donations['amount'] }}" 
						@else value="" @endif>

					</div>
					<div class="form-group">
						<label for="donation_type">Donation Type</label>
						<input type="text" class="form-control" id="donation_type" placeholder="Select Donation Type"
						 name="donation_type" @if(!empty($donations['donation_type'])) 
						 value="{{ $donations['donation_type'] }}" @else value="" @endif>
					</div>
					<div class="form-group">
					    <label for="donator_phone">Donator Contact</label>
						<input type="search" class="form-control" id="user_phone" placeholder="Donator phone/Email" 
						name="donator_phone" @if(!empty($donations['donator_id'])) value="{{ $donations['donator_id'] }}"readonly @else 
						value="" @endif >
						<div id="donator-phone-suggestion">
						</div>
					</div>
					<!-- hidden input box for donator type -->
						<input type="hidden" type="text" class="form-control" id="donator_type" placeholder="Donator Type"
						 name="donator_type" readonly>
					
					<div class="form-group">
						<label for="donator_name">Donator Name</label>
						<input type="text" class="form-control" id="donator_name" placeholder="Donator Name"
						 name="donator_name" readonly>
					</div>
					<input name="donator_id" id="donator-id" type="hidden">
					<div class="form-group">
						<label for="date">Donation Date</label>
						<input type="date" class="form-control" id="date" name="date" @if(!empty($donations['date'])) 
						value="{{ $donations['date'] }}" @else value="" @endif>
					</div>

					<button type="submit" class="btn btn-primary mr-2">Submit</button>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection