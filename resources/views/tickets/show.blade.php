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
        <h1 class="title">
            <p>{{ $tickets->current_date }}</p>
            {{ $tickets->title }}
            {{ $tickets->deadline_date }}
            {{ $tickets->planned_time }}
            {{ $tickets->actual_time }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $tickets->body }}</p>    
            </div>
        </div>
        <div class="studycontainer">
        　　<script src="{{ asset('/js/myhome.js') }}"></script>
            <div class="study">
                <details>
                    <summary>勉強を開始する</summary>
                   <div id="time">00:00.000</div>
                     <div class="timebtn">
                     <button id="start" onclick="start()">Start</button>
                     <button id="stop" onclick="stop()" disabled>Stop</button>
                     <button id="reset" onclick="reset()" disabled>Reset</button>
                     <button id="complete" onclick="complete()" disabled>Complete</button>
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
