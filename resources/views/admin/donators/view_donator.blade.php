@extends('admin.layout.layout')

@section('content')

<nav class="navbar " style="background-color: #f2f2f2;padding:15px">
	<h2>Donator Details</h2>				
</nav>
<div class="content-wrapper">

	
	<div class="grid-margin stretch-card" style="margin: auto;">
		<div class="card">
			<div class="card-body">
				<div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>
				<form class="form-sample row p-3" >

					<div class="col-12 mb-3" style="text-align:center;padding:20px;margin-bottom:10px;">
						<img style="height: 200px; width: 200px;border-radius:50%;"
						src="{{ asset('storage/admin/images/donators/'.$donator['image'])}}">
					</div>
					
                    <div class="col-6 mb-3">
						<label for="name" class="form-label">Name</label>
						<input class="form-control" value="{{$donator['name']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="profession" class="form-label">Profession</label>
						<input class="form-control" value="{{$donator['profession']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="fatherName" class="form-label">father Name</label>
						<input class="form-control" value="{{$donator['father_name']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="motherName" class="form-label">Mother Name</label>
						<input class="form-control" value="{{$donator['mother_name']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="age" class="form-label">Age</label>
						<input class="form-control" value="{{$donator['age']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="type" class="form-label">Type</label>
						<input class="form-control" @if ($donator['type'])=="1" value="Yearly Donator"
						 @elseif ($donator['type'])=="2" value="Monthly Donator" @else value="Irregular Donator" @endif readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="email" class="form-label">Email</label>
						<input class="form-control" value="{{$donator['email']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="phone" class="form-label">Mobile</label>
						<input class="form-control" value="{{$donator['phone']}}" readonly>
					</div>
					
					
					<div class="col-12 mb-3">
						<label for="presentAddress" class="form-label">Present address</label>
						<input class="form-control" value="{{$donator['present_address']}}" readonly>
					</div>
					<div class="col-12 mb-3">
						<label for="permanentAddress" class="form-label">Permanent Address</label>
						<input class="form-control" value="{{$donator['permanent_address']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="nationality" class="form-label">Nationality</label>
						<input class="form-control" value="{{$donator['nationality']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="relegion" class="form-label">Relegion</label>
						<input class="form-control" value="{{$donator['relegion']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="nationalId" class="form-label">National Id Number(if available)</label>
						<input class="form-control" value="{{$donator['NID']}}" readonly>
					</div>
					<div class="col-6 mb-3">
						<label for="birthId" class="form-label">Birth Id Number</label>
						<input class="form-control" value="{{$donator['birth_id']}}" readonly>
					</div>
                    <div class="col-6 mb-3">
						<label>Status</label>
						<input class="form-control" @if($donator['status'])=="1" 
						style="color:green;border-color:green;font-weight: bold;"  value="Approved" @else 
						style="color:red;border-color:red;font-weight: bold;" value="Not Approved" @endif readonly>
					</div>
					<div class="col-12 m-3" style="text-align: center;">
						<a class="btn btn-success" href="{{ url('admin/donator-approval/'.$donator['id']) }}">
							Approve Donator
						</a>
					</div>
					<div class="col-12 m-3" style="text-align: center;">
						<a class="btn btn-danger"  href="{{ url('admin/donators/delete-donator/'.$donator['id']) }}">
							Reject Donator
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection


