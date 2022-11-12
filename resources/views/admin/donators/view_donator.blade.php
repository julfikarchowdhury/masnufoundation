@extends('admin.layout.layout')

@section('content')


<div class="content-wrapper">
	<div class="row" >
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 mb-4 mb-xl-0">
					<h3 class="font-weight-bold"><u>donator</u></h3>
				</div>
			</div>
		</div>
	</div>
	<div class="col-5 grid-margin stretch-card" style="margin: auto;">
		<div class="card">
			<div class="card-body">
				
				<form class="forms-sample" >

					<div style="text-align:center;padding:20px;margin-bottom:10px;">
						<img style="height: 200px; width: 200px;text-align: center;border-radius:50%;"
						src="{{ asset('storage/admin/images/donators/'.$donator['image'])}}">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" value="{{$donator['name']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Address</label>
						<input class="form-control" value="{{$donator['address']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Phone</label>
						<input class="form-control" value="{{$donator['phone']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Email</label>
						<input class="form-control" value="{{$donator['email']}}" readonly>
					</div>
                    <div class="form-group">
						<label>Type</label>
						<input class="form-control" @if($donator['type'])=="yearly_donator"
						 value="Yearly Donator" @else value="Monthly Donator" @endif readonly>
					</div>
                    <div class="form-group">
						<label>Status</label>
						<input class="form-control" value="{{$donator['status']}}" readonly>
					</div>

					
					
				</form>
			</div>
		</div>
	</div>
</div>
@endsection


