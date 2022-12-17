@extends('admin.layout.layout')

@section('content')
     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <u><h2  style="text-align: center; padding:10px;">New Donator</h2></u>
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
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($new_donators) === 0)
                        <tr>
                            <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>
                                No Applicantion is available.</b>
                            </td>
                        </tr>
                    @else
                    
                      @foreach($new_donators as $key => $new_donator)
                        <tr style="text-align: center;">
                            <td style="padding:10px;">
                                {{ $key+1}}
                            </td>
                            <td style="padding:10px;">
                                {{ $new_donator['name']}}
                            </td>
                            <td style="padding:10px;">
                                @if( $new_donator['type'] == "0")
                                    Irregular Donator
                                @elseif($new_donator['type'] == "1")
                                    Yearly Donator
                                @else
                                    Monthly Donator
                                @endif  
                            </td>                      
                            <td style="padding:10px;text-align: center">
                                <img style="height: 80px; width: 100px;"
                                src="{{ asset('storage/admin/images/donators/'.$new_donator['image'])}}">
                            </td>
                            <td style="padding:10px;">
                                <a class="btn btn-primary" href="{{ url('admin/donators/'.$new_donator['id']) }}" 
                                title="Show Details">
                                    View Details
                                </a>
                            
                                <!-- <a href="{{ url('admin/donators/'.$new_donator['id']) }}" title="Show Details">
                                    <i style="font-size:25px;padding-right:5px;" class="fa fa-info-circle" aria-hidden="true"></i>
                                </a>
                                 -->
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