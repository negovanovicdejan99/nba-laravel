<html>
  <head>
    <title>@yield('title')</title>
  </head>
  <body>
  <div>
    @guest
        <a href="/register">Register</a>
        <a href="/login">Login</a>
    @endguest
    @auth
        <a href="/">Home</a>
        <a href="/logout">Logout</a>
    @endauth

  </div>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>