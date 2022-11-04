@extends('admin.layout.layout')

@section('content')
     <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <u><h2  style="text-align: center; padding:10px;">Monthly Donator</h2></u>
                <div>
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                </div>
                <a style="max-width: 150px; float: right; display: inline-block;" href="
                {{ url('/admin/donators/add_donators') }}" class="btn btn-block btn-primary">Add Donator</a>
                
                <div class="table-responsive pt-3">
                <table id="sections"  class="table table-bordered table-hover">
                
                    <thead>
                    <tr>
                        <th style="padding:10px;">
                        ID
                        </th>
                        <th style="padding:10px;">
                            Name
                        </th>
                        
                        <th style="padding:10px;">
                        Phone
                        </th>
                        <th style="padding:10px;">
                        Email
                        </th>
                        <th style="padding:10px;">
                        Image
                        </th><th style="padding:10px;">
                        Status
                        </th><th style="padding:10px;">
                        Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($m_donators) === 0)
                        <tr>
                            <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>No donators are available.</b></td></tr>
                    @else
                      @foreach($m_donators as $m_donator)
                        <tr>
                            <td style="padding:10px;">
                            {{ $m_donator['id']}}
                            </td>
                            <td style="padding:10px;">
                            {{ $m_donator['name']}}
                            </td>
                            
                            <td style="padding:10px;">
                            {{ $m_donator['phone']}}
                            </td>
                            <td style="padding:10px;">
                            {{ $m_donator['email']}}
                            </td>
                            <td style="padding:10px;">
                            {{ $m_donator['image']}}
                            </td>
                            <td style="padding:10px;">
                                @if( $m_donator['status']==1)
                                 <i style="font-size:30px;" class="mdi mdi-bookmark-check"></i>
                                @else
                                 <i style="font-size:30px;" class="mdi mdi-bookmark-outline"></i>
                                @endif
                            </td>
                            <td>
                                
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