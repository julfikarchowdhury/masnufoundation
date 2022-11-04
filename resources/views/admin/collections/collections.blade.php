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
                {{ url('/admin/admins/add_admins') }}" class="btn btn-block btn-primary">Add Admins</a>
                
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
                    
                </table>
                </div>
            </div>
            </div>
        </div>
       </div>
     </div>
     
    
@endsection