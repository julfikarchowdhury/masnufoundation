@extends('front.layout.layout')

@section('content')
    @if($projects->count()===0)
        <div class="moto-caption " style="text-align:center;padding: 100px 0px;">
                <h2 class="text-danger fw-semibold my-3" >NO PROJECTS AVAILEABLE !!</h2>
        </div>
    @else
    @foreach($projects as $project)
        <section class="container m-5 p-5 "style="background-color: #008e48;border-radius: 25px;">
            <div class="row d-flex">
                <div class="round-image col-5">
                    <img class="rounded-circle" src="{{ asset('storage/admin/front/images/projects/'.$project['image'])}}" class="d-block w-100" alt="...">
                </div>
                <div class="moto-caption col-7">
                    <h2 class="text-white fw-semibold my-3">{{$project->name}}</h2>
                    <hr class="text-white p-3">
                    <p class="text-white">{{$project->description}}</p>
                </div>
            </div>
        </section>
    @endforeach
    @endif
@endsection