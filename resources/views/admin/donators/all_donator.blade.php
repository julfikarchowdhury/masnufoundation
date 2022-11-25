@extends('admin.layout.layout')

@section('content')
     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <u><h2  style="text-align: center; padding:10px;">All Donator</h2></u>
                <div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>
                <a style="max-width: 150px; float: right;" href="
                {{ url('/admin/donators/add_donators') }}" class="btn btn-block btn-primary">Add Donator</a>
                
                <div class="table-responsive pt-3">
                <table id="sections"  class="table table-bordered table-hover">
                
                    <thead>
                    <tr style="text-align: center;">
                        <th >
                            ID
                        </th>
                        <th >
                            Name
                        </th>
                        <th >
                            Donator Type
                        </th>
                        <th >
                            Image
                        </th>
                        <th >
                            Status
                        </th>
                        <th >
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($all_donators) === 0)
                        <tr>
                            <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>
                                No donators are available.</b>
                            </td>
                        </tr>
                    @else
                      @foreach($all_donators as $all_donator)
                        <tr style="text-align: center;">
                            <td style="padding:10px;">
                                {{ $all_donator['id']}}
                            </td>
                            <td style="padding:10px;">
                                {{ $all_donator['name']}}
                            </td>
                            <td style="padding:10px;">
                                @if( $all_donator['type'] == "0")
                                    Irregular Donator
                                @elseif($all_donator['type'] == "1")
                                    Yearly Donator
                                @else
                                    Monthly Donator
                                @endif  
                            </td>                      
                            <td style="padding:10px;text-align: center">
                                <img style="height: 80px; width: 100px;"
                                src="{{ asset('storage/admin/images/donators/'.$all_donator['image'])}}">
                            </td>
                            <td style="padding:10px;">
                                @if( $all_donator['status']==1)
                                    <i style="font-size:30px;" class="mdi mdi-bookmark-check"></i>
                                @else
                                    <i style="font-size:30px;" class="mdi mdi-bookmark-outline"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/donators/'.$all_donator['id']) }}" title="Edit">
                                    <i style="font-size:25px;margin-right:5px;"  class="fas fa-edit"></i>
                                </a>
                                <?php /*<a title="section" class="confirmDelete" 
                                href="{{ url('admin/delete-section/'.$all_donator['id']) }}">
                                    <i style="font-size:35px;"  class="mdi mdi-file-excel-box"></i>
                                </a>*/ ?>
                                
                                <a href="{{ url('admin/donators/'.$all_donator['id']) }}" title="Show Details">
                                    <i style="font-size:25px;padding-right:5px;" class="fa fa-info-circle" aria-hidden="true"></i>
                                </a>
                                <a href="{{ url('admin/donators/delete-donator/'.$all_donator['id']) }}" title="Delete">
                                    <i style="font-size:25px;"  class="fa fa-trash" aria-hidden="true"></i>
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