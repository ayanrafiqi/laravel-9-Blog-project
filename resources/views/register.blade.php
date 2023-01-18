<x-header />
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Sign Up </h1>

    <form action=" " method="POST">
        {{ csrf_field() }}
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your Name" /></br>
        <span style="color:red">@error('name'){{$message}}@enderror</span></br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email" /></br>
        <span style="color:red">@error('email'){{$message}}@enderror</span></br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Create password" /></br>
        <span style="color:red">@error('password'){{$message}}@enderror</span>
        </br>
        <label for="repassword">Confirm Password</label>
        <input type="password" name="confirmpassword" placeholder="Enter your password again" /></br>
        <span style="color:red">@error('confirmpassword'){{$message}}@enderror</span>

        <Button class="btn">Sigup</Button>
        <a href="login">Already Registered !! Login Here</a>
    </form>
</body>

</html>
<x-footer />