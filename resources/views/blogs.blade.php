<x-header />
<h1> All Blogs </h1>

@foreach($blogs as $blog)
<article>
    <h1>{{$blog->title}}</h1>
    <div> {{$blog->content; }} </div>
</article>
@endforeach