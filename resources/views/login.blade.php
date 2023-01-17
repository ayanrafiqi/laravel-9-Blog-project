<x-header />
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Login to Continue </h1>
    <form action="" method="POST">
        {{ csrf_field() }}
        <label for="email">Email Address</label>
        <input type="text" name="email" placeholder="Enter your email" /></br>
        <span style="color:red">@error('email'){{$message}}@enderror</span>
        </br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" /></br>
        <span style="color:red">@error('password'){{$message}}@enderror</span>
        </br>
        <Button class="btn">Login</Button>
        <a href ="signup" >New User !! Register Here.</a>
    </form>
</body>
<x-footer />