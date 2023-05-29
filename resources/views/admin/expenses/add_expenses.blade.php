@extends('admin.layouts.layout')


@section('content')
<nav class="navbar " style="background-color: #f2f2f2;padding:15px">
	<h2 >Expenses</h2>				
</nav>
        <div class="content-wrapper">
          
            <div class="col-md-4 grid-margin stretch-card" style="margin: auto;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="text-align:center; padding-bottom: 20px; text-decoration: underline;" ><b>{{ $title}}</b> </h3>
                        

                       
                        <form class="forms-sample" @if(empty($expenses['id'])) action="{{ url('admin/expenses/add-expenses/') }}"
                            @else action="{{ url('admin/expenses/add-expenses/'.$expenses['id']) }}" @endif  
                            method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label for="amount" > Amount</label>
                                <input type="text" class="form-control" id="amount" placeholder="Enter amount"
                                name="amount" @if(!empty($expenses['amount'])) value="{{ $expenses['amount'] }}" 
                                @else value="" @endif >
                            </div>
                            <div class="form-group">
                                <label for="expenses_reason" > Reason</label>
                                
                                <textarea class="form-control" id="expenses_reason" rows="3" placeholder="Enter Expenses Reason"
                                name="expenses_reason"  >@if(!empty($expenses['expenses_reason'])) {{ $expenses['expenses_reason'] }} 
                                  @endif</textarea>
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <label for="amount" >Date</label>
                                <input type="date" class="form-control" id="date" placeholder="Enter expeses date"
                                name="date" @if(!empty($expenses['date'])) value="{{ $project['date'] }}" 
                                @else value="" @endif >
                            </div>
                            <div class="form-group">
                                <label for="status" >Type</label>
                                <input type="text" class="form-control" id="expenses_type" placeholder="Expenses Type"
                                name="expenses_type" @if(!empty($expenses['expenses_type'])) value="{{ $expenses['expenses_type'] }}" 
                                @else value="" @endif >
                            </div>
                            <div class="form-group">
                                <label for="admin_name" >Admin Name</label>
                                <input type="text" class="form-control" id="admin_name" placeholder="Status"
                                name="admin_name" @if(!empty($expenses['admin_name'])) value="{{ $expenses['admin_name'] }}" 
                                @else value={{Auth::guard('admin')->user()->name  }} @endif readonly>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
@endsection 
                               