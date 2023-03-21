<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VidDet</title>
</head>
<body>
    <h1>ini adalah hasil dari :  {{ $videos->title }}</h1>
    <h3>Tags : 
        @foreach ($videos->tags as $tag)
            <span> {{ $tag->name }}, </span>
        @endforeach
    </h3>
    <div>
        <h3>COMMENT NETIZEN</h3>
        @foreach ($videos->comments as $comment )
            <span>{{ $comment->comment_body }}</span>
        @endforeach
        <br>
        <a href="/posts">Back</a>
    </div>
</body>
</html>