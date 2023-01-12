<x-header />
<h1> Create Blog </h1>

<div>
  <form action="/blogs" method="POST" id="usrform">
    @csrf
    <label for="Title">Title</label>
    <input type="text" name="title">
    <span style="color:red">@error('title'){{$message}}@enderror</span>
    </br>
    <label for="content">Content</label>
    <textarea name="content" style="width:300px; height:300px">Enter blog here...</textarea>
    <span style="color:red">@error('content'){{$message}}@enderror</span>
    </br>
    <input type="submit">
  </form>

</div>