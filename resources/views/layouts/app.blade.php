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

    <footer id="footer" class="text-center">
      <p>Copyright &copy; 2017 Anranik @github</p>
    </footer>
  </body>
</html>
