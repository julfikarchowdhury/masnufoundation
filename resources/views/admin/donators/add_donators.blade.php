@extends('admin.layout.layout')


@section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Donator</h3>
                </div>
                
              </div>
            </div>
          </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 style="text-align:center; padding-bottom: 20px; text-decoration: underline;" ><b>Add Donator</b> </h3>
                        <div>
                        @if(session()->has('success_message'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}
                            </div>
                        @endif
                        </div>

                       
                        <form class="forms-sample"  action="{{ url('admin/donators/add_donators') }}"
                            method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label for="name" > Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name"
                                name="name" value="" >
                            </div>
                            <div class="form-group">
                                <label for="address" > Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address"
                                name="address" value="" >
                            </div>
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                name="email" value="" >
                            </div>
                            <div class="form-group">
                                <label for="password" >Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password"
                                name="password" value="" >
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" >Confirm Password</label>
                                <input type="text" class="form-control" id="confirm_password" placeholder="Enter password again"
                                name="confirm_password" value="" >
                            </div>
                            <div class="form-group">
                                <label for="type" >Select Donator Type</label>
                                <select  class="form-control text-dark" id="type" name="type" selected="">
                                    <option value="monthly_donator">Monthly</option>                                    
                                    <option value="yearly_donator">Yearly</option>
                                    
                                      
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phone" >Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter phone"
                                name="phone" value="" >
                            </div>
                            <div class="form-group">
                                <label for="image" > Image</label>
                                <input type="file" class="form-control" id="image"
                                name="image">
                            </div>
                            
                            <div class="form-group">
                                <label for="status" >Status</label>
                                <input type="text" class="form-control" id="status" placeholder="Status"
                                name="status" value="" >
                            </div>
                            
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
@endsection 
                               