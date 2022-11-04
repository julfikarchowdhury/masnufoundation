@extends('admin.layout.layout')


@section('content')
<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0">
					<h3 class="font-weight-bold">Donations</h3>
				</div>

			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card">
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
						<div id="appendCatagoriesLevel">
						</div>
					</div>

					
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