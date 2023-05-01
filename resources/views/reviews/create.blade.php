<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>今日の成果</title>
    </head>
    <body>
        <h1>今日やったこと</h1>
        <form action="/reviews" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="review[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            <div class="body">
                <h2>やったこと</h2>
                <textarea name="review[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <input type="hidden" name=“review[user_id]” value="{{Auth::user()->id}}">
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>