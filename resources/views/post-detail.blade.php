<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VidDet</title>
</head>
<body>
    <h1>ini adalah hasil dari :  {{ $posts->title }}</h1>
    <h3>Tags : 
        @foreach ($posts->tags as $tag)
            <span> {{ $tag->name }}, </span>
        @endforeach
    </h3>
    <div>
        <h3>COMMENT NETIZEN</h3>
        @foreach ($posts->comments as $comment )
            <span>{{ $comment->comment_body }}</span>
        @endforeach

        <br>
        <a href="/videos">Back</a>
    </div>
</body>
</html>