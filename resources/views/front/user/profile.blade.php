@extends('front.layouts.layout')

@section('content')

<header>
    <!-- nav bar  -->
    <div class="d-flex flex-row menu-bar" style="background-color: #00802b;width:100%;color:white">
        <a class="menu-item user-nav" href="#" data-section="profile">Profile</a>
        <a class="menu-item user-nav" href="#" data-section="donations">My Donations</a>
        <a class="menu-item user-nav" href="#" data-section="ongoing-projects">On Going Donation Projects</a>
    </div>
</header>

<!-- profile section -->
<div id="profile-section" style="background-color: #eaf2fb;">
    <div class="row">
        <div class="col-sm-3 ms-5 p-5">

            <div class="card  shadow-lg" style="width: 18rem;border-radius:15px">
                <img src="{{ asset('storage/admin/images/donators/'.Auth::guard('donator')->user()->image)}}" class="card-img-top mx-auto mt-4 rounded-circle shadow" style="height: 150px;width: 150px;">
                <div class="card-body">
                    <table class="table table-borderless" style="font-size: 15px;">
                        <tr>
                            <td style="width: 70%;">Last Donation Amount</td>
                            <td style="width: 30%;">{{$myDonation->value('amount')}} TK</td>
                        </tr>

                        <tr>
                            <td style="width: 70%;">Minimum Donation Amount</td>
                            <td style="width: 30%;">{{$myDonation->min('amount')}} TK</td>
                        </tr>
                        <tr>
                            <td style="width: 70%;">Maximum Donation Amount</td>
                            <td style="width: 30%;">{{$myDonation->max('amount')}} TK</td>
                        </tr>
                        <tr>
                            <td style="width: 70%;">Total Donation</td>
                            <td style="width: 30%;">{{$myDonation->sum('amount')}} TK</td>
                        </tr>
                    </table>
                    <p style="font-size: 12px;padding:10px">আলহামদুলিল্লাহ! মাসনু ফাউন্ডেশনের মাধ্যমে
                        আপনি আজ পর্যন্ত ১00 জন অসহায় মানুষের মুখে হাসি ফুটিয়েছেন!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-8 ms-5">
            <div class="card m-auto my-5 shadow-lg" style="width: 36rem;border-radius:15px ;">
                <div style="padding:10px 20px;width: 36rem;border-top-left-radius:15px;
                    border-top-right-radius:15px;background-color:#00802b;color:white">
                    <h4>My Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row m-2">
                        <div class="mx-2 ">
                            <p> Name: {{Auth::guard('donator')->user()->name}}
                                <br><br>Profession: {{Auth::guard('donator')->user()->profession}}
                                <br><br>Age: {{Auth::guard('donator')->user()->age}}
                                <br><br>Mobile No: {{Auth::guard('donator')->user()->phone}}
                                <br><br>Email: {{Auth::guard('donator')->user()->email}}
                                <br><br>Father Name: {{Auth::guard('donator')->user()->father_name}}
                                <br><br>Mother Name: {{Auth::guard('donator')->user()->mother_name}}
                                <br><br>Permanent Address: {{Auth::guard('donator')->user()->permanent_address}}
                                <br><br>Present Address: {{Auth::guard('donator')->user()->present_address}}
                                <br><br>Nationality: {{Auth::guard('donator')->user()->nationality}}
                                <br><br>Relegion: {{Auth::guard('donator')->user()->relegion}}
                                <br><br>National ID: {{Auth::guard('donator')->user()->NID}}
                                <br><br>Birth Certificate ID: {{Auth::guard('donator')->user()->birth_id}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- my donation section  -->
<div id="donations-section" class="container-fluid" style="background-color: #eaf2fb;height: 100%;">
    <div class="container-fluid" style="background-color: #eaf2fb;height: 100%;">
        <div class="row">
            <div class="col-sm-8 m-auto pb-5">
                <div class=" m-auto mt-5" style="text-align: center;">
                    <h3>Your Donations</h3>
                    <p>Here you will find detailed information about all your donations
                        and can download PDF receipts
                    </p>
                </div>
                <div class="card m-auto mt-5 shadow-lg" style="width: 46rem;border-radius:15px">
                    <div style="padding:10px 20px;border-top-left-radius:15px;
                    border-top-right-radius:15px;background-color:#00802b;color:white;text-align:center;">
                        <h3>Donations</h3>
                    </div>
                    <div class="card-body">

                        <table class="table mt-4" style="font-size: 15px;">
                            <tr>
                                <th>Donation ID</th>
                                <th>Paid at</th>
                                <th>Amount</th>
                                <th>Donation Type</th>
                                <th>Account</th>
                                <th>Action</th>
                            </tr>
                            @foreach($myDonations as $key => $my_donation)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td> {{ $my_donation['created_at']->format('h:i  A')}}<br>
                                    {{ $my_donation['created_at']->format('d-M-y')}}
                                </td>
                                <td>{{$my_donation->amount}}</td>
                                <td>{{Donation::find($my_donation['donation_type'])->project()->get()->value('name'); }}</td>
                                <td>bKash</td>
                                <td><a class="btn" style="color: green;" href="donate/{{$my_donation->id}}"> Donate Again</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- my donation section end -->
<!-- ongoing projects section -->
<div id="ongoing-projects-section" class="container-fluid" style="background-color: #eaf2fb;height: 100%;">

    <div class="row p-5">
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
</div>
<!-- donate section -->
<!-- <div style="background-color: #eaf2fb;">
    <div class="row">
        <div class="col-3 ms-5 p-5">

            <div class="card " style="width: 18rem;border-radius:15px">
                <img src="{{ asset('storage/admin/images/donators/'.Auth::guard('donator')->user()->image)}}" class="card-img-top mx-auto mt-4 rounded-circle shadow" style="height: 150px;width: 150px;">
                <div class="card-body">
                    <table class="table table-borderless" style="font-size: 15px;">
                    </table>
                    <p style="font-size: 12px;padding:10px">আলহামদুলিল্লাহ! মাসনু ফাউন্ডেশনের মাধ্যমে
                        আপনি আজ পর্যন্ত ১00 জন অসহায় মানুষের মুখে হাসি ফুটিয়েছেন!</p>
                </div>
            </div>
        </div>
        <div class="col-5  mx-auto p-5">

        </div>
    </div>
</div> -->

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
@section('custom-js')

<script>
    $(document).ready(function() {
        // Hide all sections except the profile section initially
        $('#donations-section, #ongoing-projects-section').hide();

        // Function to show the selected section
        function showSection(sectionId) {
            $('#profile-section, #donations-section, #ongoing-projects-section').hide();
            $('#' + sectionId + '-section').show();
            // Add active class to the corresponding link
            $('.user-nav').removeClass('active');
            $('a[data-section="' + sectionId + '"]').addClass('active');
        }
        // Event handler for nav links
        $('.user-nav').click(function(e) {
            e.preventDefault();
            var sectionId = $(this).data('section');
            showSection(sectionId);
        });
        // Show the profile section by default
        showSection('profile');
    });
</script>
@endsection