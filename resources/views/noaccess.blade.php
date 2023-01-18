<x-header />

@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

<h1>402 Unauthorized access </h1>
<a href="login" style="color:red; margin-left:43%"> Click here to Login Here!! </a></br>
<a href="/signup" style="color:red; margin-left:43%"> Register here to Continue!! </a>





<x-footer />