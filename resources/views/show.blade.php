<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>  
                <p class='updated_at'>{{ $post->updated_at }}</p>
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            </div>
        
        <div class="back">
            <a href="/">戻る</a>
        </div>
    </body>
</html>