<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')

<body id="page-top">
  @include('partials.nav')
  @yield('cabecera')
  <div class="container">
    @yield('content')
  </div>

  @include('partials.footer')
  @include('partials.jsbootstrap')
</body>

</html>
