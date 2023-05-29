@extends('front.layouts.layout')

@section('content')
<div class="page-header">
    <h1>Projects</h1>
</div>
<div class="page-content">
    <section>
        @if($projects->count() === 0)
        <div class="text-center p-3">
            <h2 class="text-danger fw-semibold ">NO PROJECTS AVAILABLE !!</h2>
        </div>
        @else
        @foreach($projects as $project)
        <section class="container mb-5 py-5 bg-success rounded">
            <div class="row">
                <div class="col-5">
                    <img class="rounded-circle" style="height: 250px; width: 400px;" src="{{ asset('front/images/projects/'.$project['image'])}}">
                </div>
                <div class="col-7">
                    <h2 class="text-white fw-semibold my-3">{{$project->name}}</h2>
                    <hr class="text-white">
                    <p class="text-white">{{$project->description}}</p>
                </div>
            </div>
        </section>
        @endforeach
        @endif
    </section>
</div>
@endsection