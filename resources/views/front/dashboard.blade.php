
@extends('front.layout.layout')

@section('content')
        
    
        <!-- form control  -->
        <section class="container-fluid px-5 py-2" style="background-color:#f2f2f2;">
            <div class=" px-5 ">
                    @if (session('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('success_message')}}</strong> 
                        </div>
                    @endif
                <form class="container row mx-auto g-3 my-5 shadow-sm py-3 rounded div-white" action="{{ url('/donate')}}" method="post">@csrf
                    <div class="ms-4" style="width: 200px;;">
                        <select class="form-select" aria-label=".form-select multiple" required name="donation_type">
                            <option disabled selected style="display: none;">Donation fund</option>
                            @foreach($projects as $key => $project)
                                <option value="{{$project['id']}}">{{$project['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-auto ms-4 ">
                        <input type="text" class="form-control" placeholder="Name" name="donator_name">
                    </div>
                    <div class="col-auto ms-4 ">
                        <input type="phone" class="form-control" placeholder="phone" name="donator_id">
                    </div>
                    <div class="col-auto ms-4 ">
                        <input type="number" class="form-control" placeholder="Donate Amount" name="amount">
                    </div>
                    <div style="text-align: center;padding-top:30px">
                        <button type="submit" class="btn btn-success mb-3 px-5">Donate</button>
                    </div>
                </form>
            </div>
        
        <!-- carousel  -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" >
            
        <div class="carousel-indicators">
            <?php $i=0; foreach ($sliders as $slider): ?>
                <?php if ($i==0) {$set_ = 'active';$area = 'true'; } else {$set_ = ''; } ?> 
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" 
            class=" <?php echo $set_; ?>" style="color: dark;" aria-current="<?php echo $area; ?>" aria-label="Slide <?php echo $i+1; ?>"></button>
            
            <?php $i++; endforeach ?>
        </div>
            <div class='carousel-inner'>
            
                <?php $i=0; foreach ($sliders as $slider): ?>
                <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
                    <div class='carousel-item <?php echo $set_; ?>'>
                    <img style="height:400px;padding:20px;border-radius: 35px;"src="{{ asset('storage/admin/front/images/sliders/'.$slider['image'])}}" class="d-block w-100" alt="...">
                    </div>
                <?php $i++; endforeach ?>
                    

                
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span style="background-color:black;" class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span style="background-color:black;" class="carousel-control-next-icon"></span>
            </button>
            <!-- <div class="carousel-inner">@foreach ($sliders as $slider)
                <div class="carousel-item active">
                <img style="height:400px;padding:20px;"src="{{ asset('storage/admin/front/images/sliders/'.$slider['image'])}}" class="d-block w-100" alt="...">
                </div>@endforeach
                
            </div> -->
        </div>
            
        </section>
        <!-- as sunnah foundation  -->
        <section class="container-fluid my-5 p-5 ">
            <div class="row d-flex">
                <div class="round-image col-5">
                    <img class="rounded-circle" src="{{ url('front/images/golden-gate.jpg') }}" alt="">
                </div>
                <div class="moto-caption col-7">
                    <h2 class="text-success fw-semibold my-3">As-Sunnah Foundation</h2>
                    <hr class="p-3">
                    <p>As-Sunnah Foundation is a non-profit, non-political, and entirely charitable organization
                        dedicated to human welfare. Following the ideals and footsteps of the teacher of humanity,
                        liberator of mankind, and role model of generosity Prophet Muhammad (Saw), this organization is
                        engaged in social reform, inculcation of great morality, establishing employment, poverty
                        alleviation, low cost or free health care, expansion of Islamic teachings and culture,
                        conducting multidisciplinary education projects, continuous program in building a clean mindset,
                        above all using oral, written and modern media to make people obey Allah and abide by His
                        Messenger (Saw).</p>
                </div>
            </div>
        </section>
        <!-- Together Let’s make a change part / card  -->
        <section class="container-fluid p-5 bg-light">
            <h1 style="text-align: center;padding:10px;color:green;"><u>Projects</u></h1><br>
            
            <div class="row ">
                <!-- card 1 -->
                @if($projects->count()===0)
                    <div class="moto-caption " style="text-align:center;padding: 100px 0px;">
                            <h2 class="text-danger fw-semibold my-3" >NO PROJECTS AVAILEABLE !!</h2>
                    </div>
                @else
                @foreach($projects as $project)
                <div class="card col-4 m-2 border-0 shadow-sm" style="width:21rem;">
                    <img style="height: 40%; width: 100%;" src="{{ asset('storage/admin/front/images/projects/'.$project['image'])}}"  alt="..." class="card-img-top" >
                    <div class="card-body">
                        <h4 class="card-title item" style="text-align: center;padding:10px;color:green;">{{$project->name}}</h4>
                        <p  style="text-align: center; padding-bottom: 15px; height: 160px; overflow-y: scroll;">{{$project->description}}</p>
                        <div class="text-center"> 
                           <button class="btn btn-success px-5 py-2"style="width: 100%;">Donate</button>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                
                
            </div>
        </section>
    
@endsection