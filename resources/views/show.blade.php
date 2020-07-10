<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Post</title>
</head>
<body>
    <div class="all-post">
        <h1>Single Post</h1>

            <div class="card">
                <form action="{{route('editPost', $post->id)}}" method="post">
                    @csrf
                    <ul style="list-style:none">
                        <li><input type="text" value="{{$post->title}}" name="title"></li>
                        <li><input type="text" value="{{$post->description}}" name="description"></li>
                        <li><input type="text" name="title_color" value="{{$post->title_color}}"></li>
                        <li><input type="text" value="{{$post->designer}}" name="designer"></li>
                        <li><input type="text" value="{{$post->designer_link}}" name="designer_link"></li>
                        <li><input name="markup" value="{{$post->markup}}"></li>
                        <li><input name="css" value="{{$post->css}}"></li>
                        <li><input type="submit" value="Update"></li>
                    </ul>
                </form>
            </div>
    </div>
</body>
</html>