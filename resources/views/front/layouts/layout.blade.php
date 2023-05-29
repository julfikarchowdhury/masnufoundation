<!DOCTYPE html>
<html lang="en">

<head>
@include('front.layouts.head')
    @yield('css')
    @yield('custom-css')
   
</head>

<body>
    <header>
        @include('front.layouts.header')
    </header>
    <main class="content">
        @yield('content')
    </main>
    <footer class="footer">
        @include('front.layouts.footer')
    </footer>
    <!-- scripts  -->
    @include('front.layouts.script')
    @yield('script')
    @yield('custom-js')

</body>
</body>

</html>