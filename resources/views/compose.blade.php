<!<!DOCTYPE>
    <link rel="stylesheet" href="./../css/app.css">
    <x-header />
    <h1>Create Blog </h1>

        <form action=" " method="POST" class="form">
            @csrf
            <label for="Title">Title</label>
            <input type="text" name="title" placeholder="Enter your blog title">
            <span style="color:red">@error('title'){{$message}}@enderror</span>
            </br>
            <label for="content">Content</label></br>
            <textarea name="content" style="width:300px; height:300px" placeholder="Enter blog here..."></textarea>
            <span style="color:red">@error('content'){{$message}}@enderror</span>
            </br>
            <button type ="submit">Create</button>
        </form>

  