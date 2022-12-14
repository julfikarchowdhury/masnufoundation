
@extends('auth.layout')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid page-body-wrapper full-page-wrapper" >
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto pt-4" >
                       <div class="auth-form-light text-left py-5 px-4 px-sm-5"  
                            style="background:linear-gradient(to bottom, #66ff66 0%, #009933 100%);border-radius:15px">

                            <img style="margin-left:85px;margin-bottom:20px;height:150px;width:100px;" 
                                src="{{ url('front/images/logoRESIZED-removebg-preview.png')}}" > 

                            <h4 class="font-weight-light">Sign in to continue.</h4>
                            <form class="pt-3" action="{{ url('user/login') }}" method="post">@csrf
                                <!-- <div class="form-group">
                                    <label for="type" >Select User Type</label> 
                                    <select  class="form-control form-control-lg" style="border-radius: 15px;background-color: white;"
                                        id="type" name="name" selected="" placeholder="Username">
                                        <option value="user">User</option>                                    
                                        <option value="super admin">Super Admin</option>
                                        <option value="admin 1">Admin 1</option> 
                                        <option value="admin 2">Admin 2</option>
                                        <option value="admin 3">Admin 3</option>                       
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <!-- <label for="email" >Username/Email</label> -->
                                    <input type="text" class="form-control form-control-lg" 
                                        style="border-radius: 15px;background-color: white;" id="email" name="email" 
                                        placeholder="Number/Email">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="password" >Password</label> -->
                                    <input type="password" class="form-control form-control-lg" name="password" 
                                    style="border-radius: 15px;background-color: white;" id="password" 
                                    placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg 
                                        font-weight-medium auth-form-btn">SIGN IN
                                    </button>
                                </div>
                                <div class="my-2">
                                    <a href="#" style="float: right;" class="auth-link text-black">Forgot password?</a>
                                </div><br>
                                <!-- <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="/admin/register" class="text-primary">Create</a>
                                </div> -->
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