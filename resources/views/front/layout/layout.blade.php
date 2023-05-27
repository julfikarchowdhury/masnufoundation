<!DOCTYPE html>
<html lang="en">

<head>
@include('front.layout.head')
    @yield('css')
    @yield('custom-css')
</head>

<body>
    <header>
        @include('front.layout.header')
    </header>
    <main class="content">
        @yield('content')

    </main>
    <footer class="footer">
        @include('front.layout.footer')

    </footer>
    <!-- scripts  -->
    @include('front.layout.script')
    @yield('script')
    @yield('custom-js')

</body>
</body>

</html>