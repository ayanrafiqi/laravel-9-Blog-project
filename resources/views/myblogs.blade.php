<x-header />
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
</head>

<body>
    <h1> My Blogs </h1>
    @foreach($myblogs as $blog)
    <article>
        <h2>{{$blog->title}}</h2>
        <div> {{$blog->content}} </div>
        <a href={{"delete/".$blog['id']}} style="padding: 14px 25px;"> Delete </a>
    </article>
    @endforeach
</body>

</html>