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
        <div> {{$blog->content; }} </div>          
    </article>
    @endforeach
</body>

</html>