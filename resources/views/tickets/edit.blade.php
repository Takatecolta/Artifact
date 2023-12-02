<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/edit.css') }}">
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
            <div class="date">
                    <h4>日付 :</h4>
                    <input type="date" id="meeting-time" name="ticket[current_date]" value="{{ $tickets->current_date }}">
                
                    <h4>期限日 :</h4>
                    <input type="date" id="meeting-time" name="ticket[deadline_date]" value="{{ $tickets->deadline_date }}">
            </div>
            <div class="time">
                    <h4>予定時間 :</h4>
                    <input type="text" id="meeting-time" name="ticket[planned_time]" value="{{ $tickets->planned_time }}">
                    <h4>実績時間 :</h4>
                    <input type="text" id="meeting-time" name="ticket[actual_time]" value="{{ $tickets->actual_time }}">
                    <div class="progress">
                <select name="ticket[progress]">
                    <option value=0 {{ $tickets->progress == 0 ? 'selected' : '' }}>未進行</option>
                    <option value=1 {{ $tickets->progress == 1 ? 'selected' : '' }}>進行中</option>
                    <option value=2 {{ $tickets->progress == 2 ? 'selected' : '' }}>完了</option>
                </select>
                </div>
            </div>
                <div class='body'>
                    <h2>概要</h2>
                    <!--<input type='text' name='ticket[body]' value="{{ $tickets->body }}">-->
                    <textarea name="ticket[body]" value="{{ $tickets->body }}" placeholder="今日の成果、目標など">{{ $tickets->body }}</textarea>
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
