<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/review_view.css') }}">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/tickets/{{ $tickets->id }}" method="POST">
                @csrf
                @method('PUT')
                 <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='ticket[title]' value="{{ $tickets->title }}">
                </div>
                <div class='current_date'>
                    <h3>日付</h3>
                    <input type="date" id="meeting-time" name="ticket[current_date]" value="{{ $tickets->current_date }}">
                </div>
                <div class='deadline'>
                    <h3>期日</h3>
                    <input type="date" id="meeting-time" name="ticket[deadline_date]" value="{{ $tickets->deadline_date }}">
                </div>
                <div class='planned_time'>
                    <h3>予定時間</h3>
                    <input type="text" id="meeting-time" name="ticket[planned_time]" value="{{ $tickets->planned_time }}">
                </div>
                <div class='actual_time'>
                    <h3>実績時間</h3>
                    <input type="text" id="meeting-time" name="ticket[actual_time]" value="{{ $tickets->actual_time }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='ticket[body]' value="{{ $tickets->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
