@extends('front.layout.layout')

@section('content')

<div class="container-fluid " style=" background-color: #008e48;text-align:center;display:inline-block">
    <h1 style="color: #ffffff;padding-top: 16px; padding-bottom: 16px;">Donor And Life Time Member</h1>
</div>
<div>
    @if (session('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> {{ session('success_message')}}</strong> 
        </div>
    @endif
</div>
<div class="container my-5 " style="background-color:#ebebeb;">
    <form class="row g-3 p-3" action="donor-life-time-member" method="post"  enctype="multipart/form-data">@csrf
        <h2 style="text-align: center;">Application Form</h2>
        <div class="col-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" required>
        </div>
        <div class="col-6">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" name="profession" class="form-control" id="profession" placeholder="Enter profession" required>
        </div>
        <div class="col-6">
            <label for="age" class="form-label">Age</label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Enter age" required>
        </div>
        <div class="col-6">
            <label for="phone" class="form-label">Mobile</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" required>
        </div>
        <div class="col-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter valid email" required>
        </div>
        <div class="col-6">
            <label for="passwordpassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
        <div class="col-6">
            <label for="fatherName" class="form-label">father Name</label>
            <input type="text" name="fatherName" class="form-control" id="fatherName" placeholder="Enter father name" required>
        </div>
        <div class="col-6">
            <label for="motherName" class="form-label">Mother Name</label>
            <input type="text" name="motherName" class="form-control" id="motherName" placeholder="Enter mother name" required>
        </div>
        <div class="col-12">
            <label for="presentAddress" class="form-label">Present address</label>
            <input type="text" name="presentAddress" class="form-control" id="presentAddress" placeholder="Enter present address" required>
        </div>
        <div class="col-12">
            <label for="permanentAddress" class="form-label">Permanent Address</label>
            <input type="text" name="permanentAddress" class="form-control" id="permanentAddress" placeholder="Enter permanent address" required>
        </div>
        <div class="col-6">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Enter nationality" required>
        </div>
        <div class="col-6">
            <label for="relegion" class="form-label">Relegion</label>
            <input type="text" name="relegion" class="form-control" id="relegion" placeholder="Enter relegion" required>
        </div>
        <div class="col-6">
            <label for="nationalId" class="form-label">National Id Number(if available)</label>
            <input type="text" name="nationalId" class="form-control" id="nationalId" placeholder="Enter national id (if available)" required>
        </div>
        <div class="col-6">
            <label for="birthId" class="form-label">Birth Id Number</label>
            <input type="text" name="birthId" class="form-control" id="birthId" placeholder="Enter birth id" required>
        </div>
        <div class="col-4">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
            </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
            <a style="float: right;" href="form-pdf-download"<button class="btn btn-primary" type="submit">download form</button></a>
        </div>
        
    </form>
</div>

@endsection