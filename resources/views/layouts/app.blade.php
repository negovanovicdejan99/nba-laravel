<html>
  <head>
    <title>@yield('title')</title>
  </head>
  <body>
  <div>
    <a href="/">Home</a>
    <a href="/register">Register</a>
    <a href="/login">Login</a>
    <a href="/logout">Logout</a>
  </div>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>