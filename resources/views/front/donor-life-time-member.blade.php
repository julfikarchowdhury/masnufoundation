@extends('front.layouts.layout')
@section('custom-css')

@endsection
@section('content')

<div class="page-header">
    <h1>Donor And Life Time Member</h1>
</div>

<div class="page-content">
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-body ">
                    <h2>Contact Form</h2>
                    <hr>
                    <!-- <form action="{{route('send-email')}}" method="post">@csrf
                        <div class="row g-3">
                            <div class="form-group">
                                <label for="name" class="form-label">Your Name :</label>
                                <div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Your Email :</label>
                                <div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Valid Email Adress" required>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="form-label">Subject :</label>
                                <div>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Write A Subject About Your Message" required>
                                    @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Message :</label>
                                <div>
                                    <textarea class="form-control" id="message" name="message" rows="10" placeholder="Write Your Message" required></textarea>
                                    @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success float-end">Submit</button>
                            </div>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div>
                    @if (session('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success_message') }}</strong>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <h2 class="card-title text-center">Application Form</h2>
                    <hr>
                    <form action="{{route('donor-life-time-member.post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-2">
                            <div class="form-group">
                                <label for="type" class="form-label required-field">Donor Type :</label>
                                <div>
                                    <select name="type" class="form-control" id="type">
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                    </select>
                                    @if ($errors->has('type'))
                                    <span class="text-danger">{{ $errors->first('type') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="form-label required-field">Name :</label>
                                <div>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profession" class="form-label">Profession :</label>
                                <div>
                                    <input type="text" name="profession" class="form-control" id="profession" placeholder="Enter profession">
                                    @if ($errors->has('profession'))
                                    <span class="text-danger">{{ $errors->first('profession') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label required-field">Phone :</label>
                                <div>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label required-field">Email :</label>
                                <div>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter valid email">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label required-field">Password :</label>
                                <div>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="form-label required-field">Confirm Password:</label>
                                <div>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Repeat password">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="father_name" class="form-label required-field">Father Name :</label>
                                <div>
                                    <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Enter father name">
                                    @if ($errors->has('father_name'))
                                    <span class="text-danger">{{ $errors->first('father_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label required-field">Address :</label>
                                <div>
                                    <textarea name="address" class="form-control" id="address" placeholder="Enter present address" rows="3"></textarea>
                                    @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="form-label">Image :</label>
                                <div>
                                    <input type="file" name="image" class="form-control" id="image">
                                    @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="checkTerms" value="1" id="checkTerms">
                                    <label class="form-check-label" for="checkTerms">Agree to terms and conditions.</label>
                                </div>
                                @if ($errors->has('checkTerms'))
                                <span class="text-danger">{{ $errors->first('checkTerms') }}</span>
                                @endif
                            </div>
                            <div>
                                <button class="btn btn-success float-end" type="submit">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection