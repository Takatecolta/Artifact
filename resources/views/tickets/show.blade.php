<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/show.css">
    </head>
    <body>
    <div class=tickets_container>
        <div class="title">
             <h1 class="title">
                 {{ $tickets->title }}
            </h1>
        </div>
    <div class="datecontainer">
        <div class="current_date">
            <h3>日付 :{{ $tickets->current_date }}</h3>
        </div>
         <div class="deadline_date">
            <h3>期限日 :{{ $tickets->deadline_date }}</h3>
    </div>
    <div class="timecontainer">
        <div class="planned_time">
            <h3>予定時間 :{{ $tickets->planned_time }}</h3>
        </div>
         <div class="actual_time">
            <h3>実績時間 :{{ $tickets->actual_time }}</h3>
       <div class='progress'>
           <h3>状態 :
           @if ($tickets->progress == 0)
            未進行
           @elseif ($tickets->progress == 1)
            進行中
           @elseif ($tickets->progress == 2)
            完了 
           @endif
           </h3>
       </div>
    </div>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{!! nl2br(e($tickets->body)) !!}</p>      
            </div>
        </div>
    </div>
        <div class="studycontainer">
        　　<script src="{{ asset('/js/tickets_show.js') }}"></script>
            <div class="study">
                <details>
                    <summary>勉強を開始する</summary>
                   <div id="time">00:00:00</div>
                     <div class="timebtn">
                     <button id="start" onclick="start()">Start</button>
                     <button id="stop" onclick="stop()" disabled>Stop</button>
                     <button id="reset" onclick="reset()" disabled>Reset</button>
                     <button id="complete" onclick="complete()">Complete</button>
                     </div>
                    </div>
                </details>
             </div>
        <form action="/tickets/{{ $tickets->id }}" id="form_{{ $tickets->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button> 
        </form>
        <p class="edit">[<a href="/tickets/{{ $tickets->id }}/edit">edit</a>]</p>
        <div class="footer">
            <a href="/tickets/index">戻る</a>
        </div>
    </body>
</html>
