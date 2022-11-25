<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Masnu Foundation</title>
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- css link  -->
    <link rel="stylesheet" href="{{ url('front/css/style.css') }}">
    <!-- bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">





</head>

<body style="height: 100%;">
    <header>
        <div class="my-4 div-white">
            <div class="logo container d-flex row mx-auto ps-5">
                <div class="logo-img col-1">
                    <img src="{{ url('front/images/masnu_fundation_small_logo.png')}}" >
                </div><div class="logo-img col-7">
                    <h2 style="padding-top: 75px;padding-left:10px;color:#003cb3"><b>মাসনু ফাউন্ডেশন</b></h2>
                </div>
                <div class="col-4" style="padding-top:75px;">
                    <button type="button" class="btn btn-danger ms-3  "style="float:right;">
                        <a href="/user/logout" style="color:white;text-decoration: none;">Logout</a>
                    </button>                
                </div>
            </div>
        </div>
        <!-- nav bar  -->
            <div class="d-flex flex-row" style="background-color: #00802b;width:100%;color:white">
                <div class="ms-5 p-3 ac">
                    <a class="nav-link" href="/user/profile">Profile</a>
                </div>           
                <div class="p-3 ac">
                    <a class="nav-link" href="/user/my-donation">My Donations</a>
                </div>            
                <div class="p-3 ac">
                    <a class="nav-link" href="/user/on-going-donations">On Going Donation Projects</a>
                </div>    
            </div>
    </header>
    <main >
        @yield('content')

    </main>
    <footer>
    @include('front.layout.footer')

    </footer>
    <!-- scripts  -->
    <script src="{{ url('front/js/custom.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</body>

</html>
