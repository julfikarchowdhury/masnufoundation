@extends('front.layout.layout')

@section('content')

<div class="page-header">
    <h1>Donor And Life Time Member</h1>
</div>
<div>
    @if (session('success_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> {{ session('success_message')}}</strong>
    </div>
    @endif
</div>
<div class="page-content">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Application Form</h2>
                <hr>
                <form action="donor-life-time-member" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 p-3">
                        <div class="col-6">
                            <label for="name" class="form-label required-field">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" >
                        </div>
                        <div class="col-6">
                            <label for="profession" class="form-label">Profession</label>
                            <input type="text" name="profession" class="form-control" id="profession" placeholder="Enter profession" >
                        </div>
                        <div class="col-6">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" name="age" class="form-control" id="age" placeholder="Enter age" >
                        </div>
                        <div class="col-6">
                            <label for="phone" class="form-label required-field">Mobile</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" >
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label required-field">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter valid email" >
                        </div>
                        <div class="col-6">
                            <label for="password" class="form-label required-field">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
                        </div>
                        <div class="col-6">
                            <label for="fatherName" class="form-label required-field">Father Name</label>
                            <input type="text" name="fatherName" class="form-control" id="fatherName" placeholder="Enter father name" >
                        </div>
                        <div class="col-6">
                            <label for="motherName" class="form-label required-field">Mother Name</label>
                            <input type="text" name="motherName" class="form-control" id="motherName" placeholder="Enter mother name" >
                        </div>
                        <div class="col-6">
                            <label for="presentAddress" class="form-label required-field">Present address</label>
                            <textarea name="presentAddress" class="form-control" id="presentAddress" placeholder="Enter present address" rows="3" ></textarea>
                        </div>
                        <div class="col-6">
                            <label for="permanentAddress" class="form-label required-field">Permanent Address</label>
                            <textarea name="permanentAddress" class="form-control" id="permanentAddress" placeholder="Enter permanent address" rows="3" ></textarea>
                        </div>
                        <div class="col-6">
                            <label for="nationality" class="form-label required-field">Nationality</label>
                            <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Enter nationality" >
                        </div>
                        <div class="col-6">
                            <label for="religion" class="form-label required-field">Religion</label>
                            <input type="text" name="religion" class="form-control" id="religion" placeholder="Enter religion" >
                        </div>
                        <div class="col-6">
                            <label for="nationalId" class="form-label">National ID Number (if available)</label>
                            <input type="text" name="nationalId" class="form-control" id="nationalId" placeholder="Enter national ID (if available)" >
                        </div>
                        <div class="col-6">
                            <label for="birthId" class="form-label required-field">Birth ID Number</label>
                            <input type="text" name="birthId" class="form-control" id="birthId" placeholder="Enter birth ID" >
                        </div>
                        <div class="col-12">
                            <label for="image" class="form-label required-field">Image</label>
                            <input type="file" name="image" class="form-control" id="image" >
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >
                                <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-success float-end" type="submit">Submit Form</button>
                            <!-- <a href="form-pdf-download" class="btn btn-primary float-end">Download Form</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

@endsection