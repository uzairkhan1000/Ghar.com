<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.header')
<body>
    <div class="container-fluid">

        @yield('content')

        @include('frontend.partials.footerscripts')

        @yield('scripts')
</body>
</html>