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
        <h1 class="title">
            {{ $reviews->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $reviews->body }}</p>    
            </div>
        </div>
        <form action="/reviews/{{ $reviews->id }}" id="form_{{ $reviews->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button> 
        <p class="edit">[<a href="/reviews/{{ $reviews->id }}/edit">edit</a>]</p>
        <div class="footer">
            <a href="/reviews/index">戻る</a>
        </div>
    </body>
</html>