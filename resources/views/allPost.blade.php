<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Post</title>
</head>
<body>
    <div class="all-post">
        <h1>All Post</h1>

        @foreach($posts as $post)
            <div class="card">
                    <ul style="list-style:none">
                        <li><input type="text" value="{{$post->title}}"></li>
                        <li><input type="text" vlaue="{{$post->designer}}"></li>
                        <li><input type="text" vlaue="{{$post->designer_link}}"></li>
                        <li><textarea name="" id="" cols="30" rows="10">{{$post->markup}}</textarea></li>
                        <li><textarea name="" id="" cols="30" rows="10">{{$post->css}}</textarea></li>
                        <li><a href="{{route('singlePost', $post->id)}}">Edit</a></li>
                    </ul>
                </form>

                <hr />
            </div>
        @endforeach
    </div>
</body>
</html>