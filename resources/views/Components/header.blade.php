<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Daily Blog</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <p class="navbar-brand">Daily Blogs</p>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li id="Home"><a href="/">Home</a></li>
        <li id="Compose"><a href="/compose">Compose</a></li>
        <li id="Blogs"><a href="/blogs">All blogs</a></li>
        <li id="My Blogs"><a href="/myblogs">My Blogs</a></li>
        @if(!session()->has("loginId"))
        <li id="login"><a href="/login">Login</a></li>
        <li id="signup"><a href="/signup">Signup</a></li>
         @else
        <li id="logout"><a href="/logout">logout</a></li>
        @endif
      </ul>
    </div>
  </nav>
</body>
</html>