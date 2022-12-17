



<!-- header part  -->
<div class="my-4 div-white">
            <div class="logo container d-flex row mx-auto ps-5">
                <div class="logo-img col-1">
                    <img src="{{ url('front/images/masnu_fundation_small_logo.png')}}" >
                </div>
                <div class="logo-img col-7">
                    <h2 style="padding-top: 75px;padding-left:10px;color:#006600;"><b>মাসনু ফাউন্ডেশন</b></h2>
                </div>
                <div class="col-4" style="padding-top:75px;">
                    <button class="btn btn-success ms-3  "style="float:right;">
                        <a href="/user/register" style="color:white;text-decoration: none;">Register</a>
                    </button>
                    <!-- <button class="btn btn-success ms-3 "style="float:right;">
                        <a href= style="color:white;text-decoration: none;">Login</a>
                    </button> -->
                    <button class="btn btn-success" style="float:right;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/admin/login">as Admin</a></li>
                        <li><a class="dropdown-item" href="/user/login">as Donator</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <!-- nav bar  -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #006600;" >
            <div class="container w-100 mx-auto">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav px-5 fw-bolder">
                        <li class="nav-item  ms-5" >
                            <a class="nav-link  ms-5" href="/">Home</a>
                        </li>
                        <li class="nav-item  ms-5">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item  ms-5">
                            <a class="nav-link" href="donor-life-time-member">Donor and Life Time Member</a>
                        </li>
                        <li class="nav-item  ms-5">
                            <a class="nav-link" href="projects">Projects</a>
                        </li>
                        <li class="nav-item  ms-5">
                            <a class="nav-link "href="gallery">Gallery</a>
                        </li>
                        
                        <li class="nav-item  ms-5">
                            <a class="nav-link "href="contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>