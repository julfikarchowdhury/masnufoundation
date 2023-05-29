@extends('admin.layouts.layout')

@section('content')
     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <u><h2  style="text-align: center; padding:10px;">Received Amounts</h2></u>
                <div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>
                <!-- <a style="max-width: 150px; float: right; display: inline-block;" href="
                {{ url('/admin/received_ammounts/received_ammounts') }}" class="btn btn-block btn-primary">Add Admins</a> -->
                
                <div class="table-responsive pt-3">
                <table id="sections"  class="table table-bordered table-hover">
                
                    <thead>
                    <tr>
                        <th style="padding:10px;">
                        No.
                        </th>
                        <th style="padding:10px;">
                        Name
                        </th>
                        <th style="padding:10px;">
                        Phone
                        </th>
                        <th style="padding:10px;">
                            Ammount
                        </th>
                        <th style="padding:10px;">
                            Collected By
                        </th>
                        <th style="padding:10px;">
                           Type
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