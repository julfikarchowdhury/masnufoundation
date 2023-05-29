@extends('admin.layouts.layout')

@section('content')
     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
            <u><h2  style="text-align: center; padding:10px;">My Expenses</h2></u>
                <div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>
                <a style="max-width: 150px; float: right; " href="
                {{ url('/admin/expenses/add-expenses') }}" class="btn btn-block btn-primary">Add Expenses</a>
                
                <div class="table-responsive pt-3">
                <table id="sections"  class="table table-bordered table-hover">
                
                    <thead>
                    <tr>
                        <th style="padding:10px;text-align: center"class="col-1">
                        No.
                        </th>
                        <th style="padding:10px;text-align: center"class="col-1">
                            Amount
                        </th>
                        <th style="padding:10px;text-align: center"class="col-2">
                        Type
                        </th>
                        <th style="padding:10px;text-align: center"class="col-2">
                        Reason
                        </th>
                        <th style="padding:10px;text-align: center"class="col-1">
                        Date
                        </th>
                        <th style="padding:10px;text-align: center"class="col-1">
                        Created at
                        </th>
                        <th style="padding:10px;text-align: center"class="col-1">
                        Updated at
                        </th>
                        <th style="padding:10px;text-align: center"class="col-2">
                        Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (count($expenses) === 0)
                            <tr>
                                <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>No donators are available.</b></td></tr>
                        @else
                        @foreach($expenses as $expense)
                            <tr>
                                <td style="padding:10px;">
                                    {{ $expense['id']}}
                                </td>
                                <td style="padding:10px;">
                                    {{ $expense['amount']}}
                                </td>
                                
                                <td style="padding:10px;">
                                    {{ $expense['expenses_type']}}
                                </td>
                                <td style="padding:10px;">
                                    {{ $expense['expenses_reason']}}
                                </td>
                                <td style="padding:10px;">
                                    {{ $expense['date']}}
                                </td>
                                <td style="padding:10px;">
                                    {{ $expense['created_at']->format('h:m')}}<br><br>
                                    {{ $expense['created_at']->format('d/m/y')}}
                                </td>
                                <td style="padding:10px;">
                                    {{ $expense['updated_at']->format('h:m')}}<br><br>
                                    {{ $expense['updated_at']->format('d/m/y')}}
                                </td>
                                <td>
                                    <a href="{{ url('admin/expenses/add-expenses/'.$expense['id']) }}">
                                        <i style="font-size:35px;text-align: center"  class="mdi mdi-pencil-box"></i>
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