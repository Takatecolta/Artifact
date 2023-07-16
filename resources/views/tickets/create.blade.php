<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>チケット作成</title>
         <link rel="stylesheet" href="{{ asset('/css/create.css') }}">
    </head>
    <body>
        <form action="/tickets" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="ticket[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('ticket.title') }}</p>
            </div>
            <div class="date">
               <h4>日付:</h4>
               <input type="date" name="ticket[current_date]" value="{{ date('Y-m-d') }}">
               <h4>期限日:</h4>
               <input type="date" name="ticket[deadline_date]" value="{{ date('Y-m-d') }}">
            </div>
            <div class="time">
                <h4>予定時間:</h4>
                <input type="text" name="ticket[planned_time]" placeholder="予定時間"/>
                <p class="planned__error" style="color:red">{{ $errors->first('ticket.planned_time') }}</p>
                <h4>実績時間:</h4>
                <input type="text" name="ticket[actual_time]" placeholder="実績時間"/>
                <p class="actual__error" style="color:red">{{ $errors->first('ticket.actual_time') }}</p>
            </div>
            <div class="body">
                <h2>概要</h2>
                <textarea name="ticket[body]" placeholder="目標"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('ticket.body') }}</p>
            </div>
            <input type="hidden" name="ticket[user_id]" value="{{ Auth::user()->id }}">
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
