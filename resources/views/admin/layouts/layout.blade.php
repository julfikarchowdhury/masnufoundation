<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
    @yield('css')
    @yield('custom-css')
</head>

<body></body>
<div id="main" class="container-scroller">
    <!-- header -->
    @include('admin.layouts.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- sidebar -->
        @include('admin.layouts.sidebar')
        <div class="main-panel">
            <!-- main content -->
            @yield('content')
            <!-- footer -->
            @include('admin.layouts.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@include('admin.layouts.script')
@yield('script')
@yield('custom-js')
</body>

</html>