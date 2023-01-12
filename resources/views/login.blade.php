<x-header />
<link rel="stylesheet" href="./../css/app.css"/>
<h1>Login to Continue </h1>
<form action="" method="POST" class=form>
    @csrf
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Enter your username" />
    </br>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Enter your password" />
    </br>
    <Button class="btn">Login</Button>
</form>