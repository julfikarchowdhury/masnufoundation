@extends('front.layout.layout')

@section('content')
<div style="background-color: #ebebeb;padding-bottom:30px">
    <div class="container-fluid " style=" background-color: #008e48;text-align:center;display:inline-block">
        <h1 style="color: #ffffff;padding-top: 16px; padding-bottom: 16px;">Projects</h1>
    </div>
    @if($projects->count()===0)
        <div class="moto-caption " style="text-align:center;padding: 100px 0px;">
                <h2 class="text-danger fw-semibold my-3" >NO PROJECTS AVAILEABLE !!</h2>
        </div>
    @else
    @foreach($projects as $project)
        <section class="container m-5 p-5 "style="background-color: #008e48;border-radius: 25px;">
            <div class="row d-flex">
                <div class="round-image col-5">
                    <img class="rounded-circle" style="height: 250px;width:400px;" src="{{ asset('storage/admin/front/images/projects/'.$project['image'])}}"
                    >
                </div>
                <div class="moto-caption col-7">
                    <h2 class="text-white fw-semibold my-3">{{$project->name}}</h2>
                    <hr class="text-white p-3">
                    <p class="text-white">{{$project->description}}</p>
                </div>
                
            </div>
        </section>
    @endforeach
    @endif</div>
@endsection