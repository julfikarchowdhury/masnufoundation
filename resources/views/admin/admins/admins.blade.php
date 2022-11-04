@extends('admin.layout.layout')

@section('content')
     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Admins</h4>
                <div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>
                <a style="max-width: 150px; float: right; display: inline-block;" href="
                {{ url('/admin/admins/add-edit-admin/') }}" class="btn btn-block btn-primary">Add Admins</a>
                
                <div class="table-responsive pt-3">
                <table id="sections"  class="table table-bordered table-hover">
                
                    <thead>
                    <tr>
                        <th style="padding:10px;">
                        ID
                        </th>
                        <th style="padding:10px;">
                            Name
                        </th>
                        <th style="padding:10px;">
                        Type
                        </th>
                        <th style="padding:10px;">
                        Phone
                        </th>
                        <th style="padding:10px;">
                        Email
                        </th>
                        <th style="padding:10px;">
                        Image
                        </th><th style="padding:10px;">
                        Status
                        </th><th style="padding:10px;">
                        Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($adminDetails) === 0)
                        <tr>
                            <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>No admins are available.</b></td></tr>
                    @else
                      @foreach($adminDetails as $admin)
                        <tr>
                            <td style="padding:10px;">
                            {{ $admin['id']}}
                            </td>
                            <td style="padding:10px;">
                            {{ $admin['name']}}
                            </td>
                            <td style="padding:10px;">
                            {{ $admin['type']}}
                            </td>
                            <td style="padding:10px;">
                            {{ $admin['phone']}}
                            </td>
                            <td style="padding:10px;">
                            {{ $admin['email']}}
                            </td>
                            <td >
                            <img style="height: 80px; width: 80px;" src="{{ asset('storage/admin/images/admin-images/'.$admin['image'])}}">
                            </td>
                            <td style="padding:10px;">
                                @if( $admin['status']==1)
                                 <i style="font-size:30px;" class="mdi mdi-bookmark-check"></i>
                                @else
                                 <i style="font-size:30px;" class="mdi mdi-bookmark-outline"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('/admin/admins/add-edit-admin/'.$admin['id']) }}">
                                    <i style="font-size:35px;"  class="mdi mdi-pencil-box"></i>
                                </a>
                                <?php /*<a title="section" class="confirmDelete" 
                                href="{{ url('admin/delete-section/'.$section['id']) }}">
                                    <i style="font-size:35px;"  class="mdi mdi-file-excel-box"></i>
                                </a>*/ ?>
                                <a href="{{ url('admin/admins/delete-admin/'.$admin['id']) }}">
                                    <i style="font-size:35px;"  class="mdi mdi-file-excel-box"></i>
                                </a>
                            </td>
                        </tr>
                      @endforeach
                    @endif
                      
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
       </div>
     </div>
     
    
@endsection