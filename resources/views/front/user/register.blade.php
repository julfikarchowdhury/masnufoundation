@extends('auth.layout')

@section('content')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <img style="margin-left:85px;margin-bottom:20px;height:150px;width:100px;" src="{{ url('front/images/logo.png')}}">
                        <h4 class="font-weight-light">Sign up to continue.</h4>
                        <form class="pt-3" action="{{ url('user/register') }}" method="post">@csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" style="border-radius: 15px;
                                background-color: white;" id="name" name="name" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" style="border-radius: 15px;
                                background-color: white;" id="email" name="email" placeholder="Number/Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" style="border-radius: 15px;
                                background-color: white;" id="password" name="password" placeholder="Password">
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-success btn-lg 
                                        font-weight-medium auth-form-btn">SIGN UP
                                </button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account?
                                <a href="/user/login" class="text-primary">
                                    Login
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection