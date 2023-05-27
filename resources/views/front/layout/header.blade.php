<!-- header part  -->
<div class="my-2">
    <div class="d-flex row mx-auto px-5">
        <div class="logo-img col-1">
            <img src="{{ url('front/images/masnu_fundation_small_logo.png')}}">
        </div>
        <div class="logo-img col-7">
            <h2 style="padding-top: 75px;padding-left:10px;color:#006600;"><b>মাসনু ফাউন্ডেশন</b></h2>
        </div>
        <div class="col-4" style="padding-top:75px;">
            <a href="{{ route('register')}}" class="btn btn-success float-end ms-3">Register</a>
            <button class="btn btn-success float-end" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
<div class="menu-bar">
    <a class="menu-item {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
    <a class="menu-item {{ Request::is('about') ? 'active' : '' }}" href="about">About</a>
    <a class="menu-item {{ Request::is('donor-life-time-member') ? 'active' : '' }}" href="donor-life-time-member">Donor and Life Time Member</a>
    <a class="menu-item {{ Request::is('projects') ? 'active' : '' }}" href="projects">Projects</a>
    <a class="menu-item {{ Request::is('gallery') ? 'active' : '' }}" href="gallery">Gallery</a>
    <a class="menu-item {{ Request::is('contact') ? 'active' : '' }}" href="contact">Contact</a>
</div>