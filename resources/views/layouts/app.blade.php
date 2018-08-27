<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @include('inc.messages')
      @yield('content')
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small blue">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="http://www.anowarbd.com"> Anowarbd.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </body>
</html>
