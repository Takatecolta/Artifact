<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="{{ asset('/css/review_view.css')  }}" >
    </head>
    <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/reviews/{{ $reviews->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class = 'current_date'>
                 <h3>日付</h3>
                 <span>{{ $reviews->current_date }}</span>
            </div>
            <div class = 'deadline'>
                <h3>期日</h3>
                <input type="date" id="meeting-time" name="review[deadline]" value="{{ $reviews->deadlinedate }}">
            </div>
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='review[title]' value="{{ $reviews->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='review[body]' value="{{ $reviews->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>