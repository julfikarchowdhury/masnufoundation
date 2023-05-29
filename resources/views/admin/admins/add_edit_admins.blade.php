@extends('admin.layouts.layout')


@section('content')
<nav class="navbar " style="background-color: #f2f2f2;padding:15px">
    <h2>Admins</h2>
</nav>
<div class="content-wrapper">

    <div class="col-md-4 grid-margin stretch-card" style="margin: auto;">
        <div class="card">
            <div class="card-body">
                <h3 style="text-align:center; padding-bottom: 20px; text-decoration: underline;"><b>{{ $title}}</b> </h3>



                <form class="forms-sample" @if(empty($admin['id'])) action="{{ url('admin/admins/add-edit-admin/') }}" @else action="{{ url('admin/admins/add-edit-admin/'.$admin['id']) }}" @endif method="post" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" @if(!empty($admin['name'])) value="{{ $admin['name'] }}" @else value="" @endif>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" @if(!empty($admin['email'])) value="{{ $admin['email'] }}" @else value="" @endif>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" @if(!empty($admin['password'])) value="{{ $admin['password'] }}" @else value="" @endif>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Enter password again" name="confirm_password" @if(!empty($admin['password'])) value="{{ $admin['password'] }}" @else value="" @endif>
                    </div>
                    <div class="form-group">
                        <label for="type">Select Admin Type</label>

                        @if(!empty($admin['type'])&& $admin['type']=="super admin")
                        <input type="text" class="form-control" value="{{$admin['type']}}" readonly="">
                        @else
                        <select class="form-control text-dark" id="type" name="type" selected="">
                            <option @if(!empty($admin['type'])&& $admin['type']=="admin 1" ) selected="" @endif value="admin 1">Admin 1</option>
                            <option @if(!empty($admin['type'])&& $admin['type']=="admin 2" ) selected="" @endif value="admin 2">Admin 2</option>
                            <option @if(!empty($admin['type'])&& $admin['type']=="admin 3" ) selected="" @endif value="admin 3">Admin 3</option>
                        </select>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" @if(!empty($admin['phone'])) value="{{ $admin['phone'] }}" @else value="" @endif>
                    </div>
                    <div class="form-group">
                        <label for="image"> Image</label>
                        <input type="file" class="form-control" id="image" name="image" @if(!empty($admin['image'])) value="{{ $admin['image'] }}" @else value="" @endif>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" placeholder="Status" name="status" @if(!empty($admin['status'])) value="{{ $admin['status'] }}" @else value="" @endif>
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