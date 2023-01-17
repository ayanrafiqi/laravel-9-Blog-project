<x-header />

<head>
    <h1>Create Blog </h1>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div>
        <form action=" " method="POST">
            @csrf
            <label for="Title">Title</label>
            <input type="text" name="title" placeholder="Enter your blog title">
            <span style="color:red">@error('title'){{$message}}@enderror</span>
            </br>
            <label for="content">Content</label></br>
            <textarea name="content" style="width:300px; height:300px" placeholder="Enter blog here..."></textarea>
            <span style="color:red">@error('content'){{$message}}@enderror</span>
            </br>
            <button type="submit">Create</button>
        </form>

    </div>
</body>

<x-footer/>