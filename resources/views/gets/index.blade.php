<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>設定・集計</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="{{ asset('/css/setting_index.css') }}">
    </head>
    <body>
        
        <div class="container">
          <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="ticket[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('ticket.title') }}</p>
            </div>
            <div class="progress">
            <h3>進捗：
            <progress value="50" max="100">50%</progress>
            </h3>
            </div>
            <div class="date">
               <h4>資格日付:</h4>
               <input type="date" name="ticket[deadline_date]" value="{{ date('Y-m-d') }}">
            </div>
            <div class="time">
                <h4>予定時間 : </h4>
                <input type="text" name="ticket[planned_time]" placeholder="予定時間"/>
                <p class="planned__error" style="color:red">{{ $errors->first('ticket.planned_time') }}</p>
                <h4>実績時間 : </h4>
                <input type="text" name="ticket[actual_time]" placeholder="実績時間"/>
                <p class="actual__error" style="color:red">{{ $errors->first('ticket.actual_time') }}</p>
            </div>
            <h3><a href="/gets/setting">目標日までの時間を設定 </a></h3>
        </div>
        
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>