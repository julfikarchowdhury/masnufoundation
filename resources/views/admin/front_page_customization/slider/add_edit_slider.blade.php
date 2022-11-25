@extends('admin.layout.layout')


@section('content')
<nav class="navbar " style="background-color: #f2f2f2;padding:15px">
	<h2 >Slider</h2>				
</nav>
        <div class="content-wrapper">
          
            <div class="col-md-4 grid-margin stretch-card" style="margin: auto;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="text-align:center; padding-bottom: 20px; text-decoration: underline;" ><b>{{ $title}}</b> </h3>
                        

                       
                        <form class="forms-sample" @if(empty($slider['id'])) action="{{ url('admin/front-page-customization/slider/add-edit-slider/') }}"
                            @else action="{{ url('admin/front-page-customization/slider/add-edit-slider/'.$slider['id']) }}" @endif  
                            method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label for="about" > Description</label>
                                <!-- <input type="text" class="form-control" id="about" placeholder="Enter description"
                                name="about" @if(!empty($slider['about'])) value="{{ $slider['about'] }}" 
                                @else value="" @endif > -->
                                <textarea class="form-control" id="description" rows="3" placeholder="Enter description"
                                name="description"  >@if(!empty($slider['description'])) {{ $slider['description'] }} 
                                  @endif</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tags" >Tags</label>
                                <input type="text" class="form-control" id="tags" placeholder="Enter tags"
                                name="tags" @if(!empty($slider['tags'])) value="{{ $slider['tags'] }}" 
                                @else value="" @endif >
                            </div>
                            <div class="form-group">
                                <label for="image" > Image</label>
                                <input type="file" class="form-control" id="image"name="image" >
                            </div>
                            <div style="padding:0px 0px;text-align: center">
                              @if(!empty($slider['image']))
                              <img style="height: 100px; width: 200px;text-align: center;border: 1px solid #000000;" 
                              src="{{ asset('storage/admin/front/images/sliders/'.$slider['image'])}}"><br><br>@else  @endif
                            </div>
                            <div class="form-group">
                                <label for="status" >Status</label>
                                <input type="text" class="form-control" id="status" placeholder="Status"
                                name="status" @if(!empty($slider['status'])) value="{{ $slider['status'] }}" 
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
                               