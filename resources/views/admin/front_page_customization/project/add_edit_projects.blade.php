@extends('admin.layouts.layout')


@section('content')
<nav class="navbar " style="background-color: #f2f2f2;padding:15px">
	  <h2 >Project</h2>				
</nav>
        <div class="content-wrapper">
          
            <div class="col-md-4 grid-margin stretch-card" style="margin: auto;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="text-align:center; padding-bottom: 20px; text-decoration: underline;" ><b>{{ $title}}</b> </h3>
                        

                       
                        <form class="forms-sample" @if(empty($project['id'])) action="{{ url('admin/front-page-customization/project/add-edit-projects/') }}"
                            @else action="{{ url('admin/front-page-customization/project/add-edit-projects/'.$project['id']) }}" @endif  
                            method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label for="name" > Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name"
                                name="name" @if(!empty($project['name'])) value="{{ $project['name'] }}" 
                                @else value="" @endif >
                            </div>
                            <div class="form-group">
                                <label for="description" > Description</label>
                                <!-- <text-area ><input type="text" class="form-control" id="description" placeholder="Enter description"
                                name="description" @if(!empty($project['description'])) value="{{ $project['description'] }}" 
                                @else value="" @endif ></text-area> -->
                                <textarea class="form-control" id="description" rows="3" placeholder="Enter description"
                                name="description"  >@if(!empty($project['description'])) {{ $project['description'] }} 
                                  @endif</textarea>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="image" > Image</label>
                                <input type="file" class="form-control" id="image" name="image" >
                            </div>
                            <div style="padding:0px 0px;text-align: center">
                            @if(!empty($project['image']))
                            <img style="height: 100px; width: 200px;text-align: center;border: 1px solid #000000;" 
                            src="{{ asset('front/images/projects/'.$project['image'])}}"><br><br>@else  @endif
                            </div>
                            <!-- <div class="form-group">
                                <label for="amount" >Amount</label>
                                <input type="text" class="form-control" id="amount" placeholder="Enter amount"
                                name="amount" @if(!empty($project['amount'])) value="{{ $project['amount'] }}" 
                                @else value="" @endif >
                            </div> -->
                            <div class="form-group">
                                <label for="status" >Status</label>
                                <input type="text" class="form-control" id="status" placeholder="Status"
                                name="status" @if(!empty($project['status'])) value="{{ $project['status'] }}" 
                                @else value="" @endif >
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
                               