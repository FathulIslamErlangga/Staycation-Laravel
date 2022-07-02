<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @stack('after-style')
    @include('templates.style')
    @stack('before-style')
    <title>{{ $title }}</title>
  </head>
  <body>
    <header>
        @include('templates.header')
      </header>

      @yield('content')

    <footer class="footer-section-bg">
      @include('templates.footer')
    </footer>
  
    @stack('after-script')
    @include('templates.script')
    @stack('before-script')
  </body>
</html>