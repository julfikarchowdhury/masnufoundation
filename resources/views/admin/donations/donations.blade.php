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
                <a style="max-width: 150px; float: right; " href="
                {{ url('/admin/donations/add-edit-donations') }}" class="btn btn-block btn-primary">Add Donation</a>
                
                            
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
                    <tbody>
                    @if (count($donations) === 0)
                        <tr>
                            <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>No donations are available.</b></td></tr>
                    @else
                      @foreach($donations as $donation)
                        <tr>
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['id']}}
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['amount']}}
                            </td>
                            @if(($donation['donator_type'] == "Irregular Donator") )
                                <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['donator_name']}}                                        
                                </td>
                            @else
                                <td style="padding:15px 10px;text-align:center;">
                                    <a href="{{ url('admin/donators/'.$donation['donator_id']) }}">{{ $donation['donator_name']}}</a>                           
                                </td>
                            @endif
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['donator_type']}}    
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['date']}}
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['donation_type']}}
                            </td>
                            <td>
                                <a href="{{ url('admin/show-donation-details/'.$donation['id']) }}">
                                    <i style="font-size:35px;text-align: center"  class="mdi mdi-eye" title="show detals"></i>
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