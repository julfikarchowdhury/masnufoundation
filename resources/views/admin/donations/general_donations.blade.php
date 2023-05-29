@extends('admin.layouts.layout')

@section('content')
<? use App\Models\Donation; ?>

     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <u><h2  style="text-align: center; padding:10px;">Monthly Donations</h2></u>
                <div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>

                   
                <div class="table-responsive pt-3">
                                 
                <table id="sections"  class="table table-bordered table-hover">                
                    <thead>
                    <tr>
                        <th style="padding:15px 10px;text-align:center;">
                        ID
                        </th>
                        <th style="padding:10px;text-align:center;">
                            Donator's<br>name
                        </th>
                        <th style="padding:10px;text-align:center;">
                            Donator's<br>phone
                        </th>
                    
                        <th class="dropdown" style="padding:10px;text-align:center;">
                                <button class="btn dropdown-toggle" style="text-align:center"
                        type="button" id="filterByMonth" data-toggle="dropdown"   aria-expanded="false">
                                    <b>{{$currentMonth}}</b>
                                </button>
                                <div class="dropdown-menu" style="max-height: 180px;overflow-y: auto;" aria-labelledby="filterByMonth">
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
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody id="filtered-table">
                            @if (count($donationDetails) === 0)
                                <tr>
                                    <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>No donations are available.</b></td>
                                </tr>
                            @else
                            @foreach($donationDetails as $key => $donator)
                                <tr>
                                    <td style="padding:15px 10px;text-align:center;">
                                        {{$key+1}}
                                    </td>
                                    <td style="padding:15px 10px;text-align:center;">
                                        {{ $donator['name']}}                                        
                                    </td>
                                    <td style="padding:15px 10px;text-align:center;">
                                        {{ $donator['phone']}} 
                                    </td>
                                    
                                    @if (count(Donation::where('donator_type',$donator['id'])->whereMonth('date',(now()->month))->get()) === 0)
                                    <td style="padding:15px 10px;text-align: center; color:red;"><strong>Not Paid</strong>
                                    </td>
                                    @else
                                    <td style="padding:15px 10px;text-align: center; color:green;"><strong>Paid</strong>
                                    </td>
                                    @endif
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
