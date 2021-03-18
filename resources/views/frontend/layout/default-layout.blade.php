<!DOCTYPE html>
<html lang="en">
 @include('frontend.partials.header')
<body>
  @include('frontend.partials.navbar')
  @yield('content')
  @include('frontend.partials.footer')  
  @yield('scripts')
</body>
</html>