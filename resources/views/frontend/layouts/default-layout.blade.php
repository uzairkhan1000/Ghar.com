<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.header')
<body>
    <div class="container-fluid">
        @include('frontend.partials.navbar')

        @yield('content')
        
        @include('frontend.partials.footer')
        @include('frontend.partials.footerscripts')

        @yield('scripts')
</body>
</html>