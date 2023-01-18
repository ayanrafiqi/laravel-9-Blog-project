<x-header />
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
</head>

<body>
    <h1> All Blogs </h1>

    @foreach($blogs as $blog)
    <article>
        <h2>{{$blog->title}}</h2>
        <div> {{$blog->content }} </div>
        <h4 style="color:blue">Posted by: <span>{{$blog->name}}</span></h4>
    </article>
    @endforeach
</body>

</html>