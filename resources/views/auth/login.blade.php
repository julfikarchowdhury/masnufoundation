
@extends('auth.layout')

@section('content')
  <div class="container-fluid" style="background-color: #66ccff;">
    <div class="container-fluid page-body-wrapper full-page-wrapper" >
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5"  
                           style="background-color: #66ccff;border-radius: 15px;">
              <div class="brand-logo">
                <img src="{{ url('admin/images/logo.svg')}}" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              
              <form class="pt-3" action="{{ url('admin/login') }}" method="post">@csrf
                <div class="form-group">
                <label for="type" >Select User Type</label>
                  <select  class="form-control form-control-lg" style="border-radius: 15px;background-color: white;"
                   id="type" name="type" selected="" placeholder="Username">
                      <option value="user">User</option>
                                                          
                      <option value="super admin">Super Admin</option>
                      <option  value="admin 1">Admin 1</option> 
                      <option  value="admin 2">Admin 2</option>
                      <option  value="admin 3">Admin 3</option>                       
                  </select>
                </div>
                <div class="form-group">
                  <label for="email" >Username/Email</label>
                  <input type="email" class="form-control form-control-lg" 
                  style="border-radius: 15px;background-color: white;" id="email" name="email" 
                  placeholder="Username/Email">
                </div>
                <div class="form-group">
                  <label for="password" >Password</label>
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
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" >
                      Keep me signed in
                    </label>
                  </div> -->
                  <a href="#" style="float: right;" class="auth-link text-black">Forgot password?</a>
                </div><br>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="/admin/register" class="text-primary">Create</a>
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