
@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <u>
                        <h2 style="text-align: center; padding:10px;">Gallerys</h2>
                    </u>
                    <div>
                        @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ session('success_message')}}</strong>
                        </div>
                        @endif
                    </div>
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary float-right">Add gallerys</a>
                    <div class="table-responsive pt-3">
                        <table id="sections" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th class="col-md-2">
                                        NO.
                                    </th>
                                    <th class="col-md-2">
                                        Name
                                    </th>
                                    <th class="col-md-4">
                                        Description
                                    </th>
                                    <th class="col-md-2">
                                        Status
                                    </th>
                                    <th class="col-md-2">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($gallerys) === 0)
                                <tr>
                                    <td colspan="7" style="text-align: center; color:red;"><strong>SORRY!! </strong>No gallerys are available.</b></td>
                                </tr>
                                @else
                                @foreach($gallerys as $gallery)
                                <tr>
                                    <td>
                                        {{ $gallery['id']}}
                                    </td>
                                    <td>
                                        {{ $gallery['name']}}
                                    </td>
                                    <td>
                                        <textarea style="border: 0px; height:100px;width:250px;">
                                        {{ $gallery['description']}}</textarea>
                                    </td>
                                    <td style="padding:10px; text-align:center;">
                                        @if( $gallery['status']==1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/front-page-customization/gallery/add-edit-gallerys/'.$gallery['id']) }}">
                                            <i style="font-size:35px;text-align: center" class="mdi mdi-pencil-box"></i>
                                        </a>
                                        <a href="{{ url('admin/front-page-customization/gallery/delete-gallery/'.$gallery['id']) }}">
                                            <i style="font-size:35px;text-align: center" class="mdi mdi-file-excel-box"></i>
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