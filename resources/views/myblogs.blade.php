<x-header />
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
</head>

<body>
    <h1> My Blogs </h1>
    @foreach($myblogs as $item)
    <article>
        <h2>{{$item->title}}</h2>
        <div> {{$item->content}} </div>
        <a href={{"delete/".$item['id']}} style="padding: 14px 25px;"> Delete </a>
    </article>
    @endforeach
</body>

</html>