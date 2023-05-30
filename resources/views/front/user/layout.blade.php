
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MAsnu Foundation</title>
   <!-- plugins:css  -->
  <link rel="stylesheet" href="{{ url('admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ url('admin/vendors/css/vendor.bundle.base.css')}}"> 
  <!-- endinject  -->
    <!-- Plugin css for this page  -->
   <!-- End plugin css for this page  -->
   <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css')}}">
   <!-- endinject  -->
  <link rel="shortcut icon" href="{{ url('admin/images/favicon.png')}}" />
</head>

<body >

  
  @yield('content')


  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ url('admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url('admin/js/off-canvas.js')}}"></script>
  <script src="{{ url('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ url('admin/js/template.js')}}"></script>
  <script src="{{ url('admin/js/settings.js')}}"></script>
  <script src="{{ url('admin/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>