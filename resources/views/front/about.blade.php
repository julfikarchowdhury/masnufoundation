@extends('front.layout.layout')

@section('content')
<div class="container w-100 mx-auto">
    <h1>ABOUT</h1>
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
</div>
@endsection