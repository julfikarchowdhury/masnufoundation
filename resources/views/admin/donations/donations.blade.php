@extends('admin.layouts.layout')

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
                        <li class="dropdown-item x"  value="1">January</li>
                        <li class="dropdown-item x"  value="2">February</li>
                        <li class="dropdown-item x"  value="3">March</li>
                        <li class="dropdown-item x"  value="4">April</li>
                        <li class="dropdown-item x"  value="5">May</li>
                        <li class="dropdown-item x"  value="6">June</li>
                        <li class="dropdown-item x"  value="7">July</li>
                        <li class="dropdown-item x"  value="8">August</li>
                        <li class="dropdown-item x"  value="9">September</li>
                        <li class="dropdown-item x"  value="10">October</li>
                        <li class="dropdown-item x"  value="11">November</li>
                        <li class="dropdown-item x"  value="12">December</li>
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
                            Donation<br>Fund
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