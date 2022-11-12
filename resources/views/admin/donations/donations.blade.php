@extends('admin.layout.layout')

@section('content')
     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <u><h2  style="text-align: center; padding:10px;">Donations</h2></u>
                <div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>
                <!-- <div style="width: 100%;">
                    <a style="max-width: 150px; float: right" href="{{ url('/admin/donations/add-edit-donations') }}"
                    class="btn btn-block btn-primary">Add Donation</a>
                </div> -->
                <div style="width: 100%;height:60px;">
                    <a style="max-width: 150px; float: right" href="{{ url('/admin/donations/add-edit-donations') }}"
                    class="btn btn-block btn-primary">Add Donation</a>
                </div>

                <div class="dropdown">
                        <button class="btn dropdown-toggle border border-dark" style="width: 150px;height:10px;float:right;text-align:center"
                         type="button" id="filterByMonth" data-toggle="dropdown"   aria-expanded="false">
                            Month
                        </button>
                        <div class="dropdown-menu" aria-labelledby="filterByMonth">
                            <li class="dropdown-item" id="x"  value="10">January</li>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/2') }}">February</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/3') }}">March</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/4') }}">April</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/5') }}">May</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/6') }}">June</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/7') }}">July</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/8') }}">August</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/9') }}">September</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/10') }}">October</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/11') }}">November</a>
                            <a class="dropdown-item" href="{{ url('/admin/donations/donations/12') }}">December</a>

                        </div>
                    </div>      
                <div class="table-responsive pt-3">
                                 
                <table id="sections"  class="table table-bordered table-hover">                
                    <thead>
                    <tr>
                        <th style="padding:15px 10px;text-align:center;">
                        ID
                        </th>
                        <th style="padding:15px 10px;text-align:center;">
                            Amount
                        </th>
                        
                            <th style="padding:10px;text-align:center;">
                                Donated<br>by
                            </th>
                            <th style="padding:10px;text-align:center;">
                                Donator<br>Type
                            </th>
                        
                        <th style="padding:10px;text-align:center;">
                            Donation<br> Date
                        </th>
                        <th style="padding:10px;text-align:center;">
                            Donation<br>Type
                        </th>
                        <th style="padding:15px 10px;text-align:center;">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody id="filtered-table">
                        @include('admin.donations.filtered_donation')
                    </tbody>
                </table>
            </div>
            </div>
            </div>
        </div>
       </div>
     </div>
     
    
@endsection