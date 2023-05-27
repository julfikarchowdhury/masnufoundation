@extends('front.layout.layout')

@section('content')

<!-- form control  -->
<section class="container-fluid px-5 py-2 ">
    <div class="container px-5">
        @if (session('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success_message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form class="row mx-auto g-4 my-5 shadow-sm p-4 rounded bg-white" action="{{ url('/donate')}}" method="post">
            @csrf
            <div class="col">
                <select class="form-select" aria-label=".form-select multiple" required name="donation_type">
                    <option disabled selected hidden>Donation fund</option>
                    @foreach($projects as $key => $project)
                    <option value="{{$project['id']}}">{{$project['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Name" name="donator_name">
            </div>
            <div class="col">
                <input type="phone" class="form-control" placeholder="Phone" name="donator_id">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Donate Amount" name="amount">
            </div>
            <div class="col-12 text-center mt-5">
                <button type="submit" class="btn btn-success px-5">Donate</button>
            </div>
        </form>
    </div>

    <!-- carousel  -->
    @if(count($sliders)>0)
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $i = 0;
            foreach ($sliders as $slider) : ?>
                <?php if ($i == 0) {
                    $set_ = 'active';
                    $area = 'true';
                } else {
                    $set_ = '';
                } ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $set_; ?>" style="color: dark;" aria-current="<?php echo $area; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
            <?php $i++;
            endforeach ?>
        </div>
        <div class="carousel-inner">
            <?php $i = 0;
            foreach ($sliders as $slider) : ?>
                <?php if ($i == 0) {
                    $set_ = 'active';
                } else {
                    $set_ = '';
                } ?>
                <div class="carousel-item <?php echo $set_; ?>">
                    <img style="height:400px;padding:20px;border-radius: 35px;" src="{{ asset('storage/admin/front/images/sliders/'.$slider['image'])}}" class="d-block w-100" alt="...">
                </div>
            <?php $i++;
            endforeach ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color:black;" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="background-color:black;" aria-hidden="true"></span>
        </button>
    </div>
    @endif
</section>

<!-- as sunnah foundation  -->
<section class="container-fluid my-5 p-5 bg-light">
    <div class="row">
        <div class="round-image col-5">
            <img class="rounded-circle" src="{{ url('front/images/golden-gate.jpg') }}" alt="">
        </div>
        <div class="moto-caption col-7">
            <h2 class="text-success fw-semibold my-3">Masnu Foundation</h2>
            <hr class="p-3">
            <p>Masnu Foundation is a non-profit, non-political, and entirely charitable organization dedicated to human welfare. Following the ideals and footsteps of the teacher of humanity, liberator of mankind, and role model of generosity Prophet Muhammad (Saw), this organization is engaged in social reform, inculcation of great morality, establishing employment, poverty alleviation, low cost or free health care, expansion of Islamic teachings and culture, conducting multidisciplinary education projects, continuous program in building a clean mindset, above all using oral, written and modern media to make people obey Allah and abide by His Messenger (Saw).</p>
        </div>
    </div>
</section>

<!-- Together Let’s make a change part / card  -->
<section class="p-5 ">
    <h1 class="text-center text-success mb-4"><u>Projects</u></h1>

    <div class="row">
        @if($projects->count()===0)
        <div class="col text-center py-5">
            <h2 class="text-danger fw-semibold">NO PROJECTS AVAILABLE!!</h2>
        </div>
        @else
        @foreach($projects as $project)
        <div class="col-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('front/images/projects/'.$project['image']) }}" alt="Project Image" class="card-img-top" style="height: 200px;">
                <div class="card-body text-center d-flex flex-column">
                    <h4 class="card-title text-success">{{ $project->name }}</h4>
                    <p class="card-text" style="max-height: 160px; overflow-y: scroll;">{{ $project->description }}</p>
                    <div class="mt-auto">
                        <button class="btn btn-success col-12">Donate</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</section>


@endsection