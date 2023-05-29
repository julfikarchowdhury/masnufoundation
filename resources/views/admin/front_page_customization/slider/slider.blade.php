@extends('admin.layouts.layout')

@section('content')
     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
            <u><h2  style="text-align: center; padding:10px;">Sliders</h2></u>
                <div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>
                <a style="max-width: 150px; float: right; " href="
                {{ url('admin/front-page-customization/slider/add-edit-slider/') }}" class="btn btn-block btn-primary">Add Sliders</a>
                
                <div class="table-responsive pt-3">
                <table id="sections"  class="table table-bordered table-hover" >
                
                    <thead>
                    <tr>
                        <th style="padding:10px;text-align: center" class="col-sm-1 col-md-1 col-lg-1">
                        NO.
                        </th>
                        <th style="padding:10px;text-align: center"class="col-sm-3 col-md-4 col-lg-4">
                        About
                        </th>
                        <th style="padding:10px;text-align: center"class="col-sm-2 col-md-2 col-lg-2">
                        Tags
                        </th>
                        <th style="padding:10px;text-align: center"class="col-sm-3 col-md-2 col-lg-2">
                        Image
                        </th>
                        <th style="padding:10px;text-align: center"class="col-sm-1 col-md-1 col-lg-1">
                        Status
                        </th>
                        <th style="padding:10px;text-align: center"class="col-sm-2 col-md-2 col-lg-2">
                        Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($sliders) === 0)
                        <tr>
                            <td colspan="6" style="text-align: center; color:red;"><strong>SORRY!! </strong>No sliders are available.</b></td></tr>
                    @else
                      @foreach($sliders as $slider)
                        <tr>
                            <td style="padding:10px;text-align: center">
                            {{ $slider['id']}}
                            </td>
                            <td >
                            <textarea style="border: 0px; height:100px; width:250px;">
                                {{ $slider['about']}}</textarea>
                            </td>
                            <td style="padding:10px;text-align: center">
                            {{ $slider['tags']}}
                            </td>
                            <td >
                            <img style="height: 80px; width: 100px;text-align: center" src="{{ asset('storage/admin/front/images/sliders/'.$slider['image'])}}">
                            </td>
                            <td style="padding:10px;">
                                @if( $slider['status']==1)
                                 <i style="font-size:30px;text-align: center" class="mdi mdi-bookmark-check"></i>
                                @else
                                 <i style="font-size:30px;text-align: center" class="mdi mdi-bookmark-outline"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/front-page-customization/slider/add-edit-slider/'.$slider['id']) }}">
                                    <i style="font-size:35px;text-align: center"  class="mdi mdi-pencil-box"></i>
                                </a>
                                <?php /*<a title="section" class="confirmDelete" 
                                href="{{ url('admin/delete-section/'.$section['id']) }}">
                                    <i style="font-size:35px;"  class="mdi mdi-file-excel-box"></i>
                                </a>*/ ?>
                                <a href="{{ url('admin/front-page-customization/slider/delete-slider/'.$slider['id']) }}">
                                    <i style="font-size:35px;text-align: center"  class="mdi mdi-file-excel-box"></i>
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