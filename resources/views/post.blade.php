<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page_title}}</title>
</head>
<body>
    <h3>Number of our post: {{$post_count}}</h3>
    <h4>Max id Number:(ex: max price) {{$max_id}}</h4>
    <hr>
    @foreach($posts as $post)
        <p>{{$post->id}}</p>
        <p>{{$post->title}}</p>
{{--        <p>{{$post->subtitle}}</p>--}}
        <p>{{$post->description}}</p>
        <hr>
    @endforeach
    {{$posts->links()}}
</body>
</html>
