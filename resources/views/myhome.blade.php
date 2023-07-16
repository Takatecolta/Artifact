@extends('layouts.app')
<!DOCTYPE html>

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="{{ asset('/css/myhome.css')  }}" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.8/index.global.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/google-calendar@6.1.8/index.global.min.js"></script>
        <script src="cal/config.js"></script>
        
        <script>

          document.addEventListener('DOMContentLoaded', function() {
           var calendarEl = document.getElementById('calendar');
           var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            googleCalendarApiKey: 'AIzaSyD4A4XLdwToSd6l54F0-7TnAz7RUOsWUa0',
        　　events: {
		     googleCalendarId: "AIzaSyD4A4XLdwToSd6l54F0-7TnAz7RUOsWUa0"
            },
            eventTimeFormat: { hour: 'numeric', minute: '2-digit' },
            headerToolbar: {
             left: 'prev, next today',
             center: 'title',
             right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            
            displayEventTime: false,
        　　eventClick: function(arg) {
             window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');
             arg.jsEvent.preventDefault();
        　　},
        　　 selectable: true,
             select: function (info) {
             alert("selected " + info.startStr + " to " + info.endStr);
             },
            
           });
           calendar.render();
          });

        </script>
    </head>
    <body>
        <iframe src="https://calendar.google.com/calendar/embed?src=takatecolta.36%40gmail.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        <nav>
  　　　 　<div class="nav-buttons">
    　　　<a href="/tickets/create" class="btn">チケット作成</a>
    　　　<a href="/tickets/index" class="btn">チケット</a>
    　　　<a href="/gets/google_login" class="btn">ユーザー一覧</a>
    　　　<a href="/gets/index" class="btn">集計</a>
 　　　　　 </div>
        </nav>
        
        <p id="RealtimeClockArea"></p>
        <script src="{{ asset('/js/myhome.js') }}"></script>
        <div class="calendar-wrapper">
            <div id="calendar"></div>
        </div>
        
        
        
        
        <div class="wrapper">
        <!--<p><a>時間を測る</a></p>-->
        <!-- 計測時間を表示 -->
        <div id="time">00:00.000</div>
        
        <!-- スタート・ストップ・リセットボタン -->
        <div class="timebtn">
  　　　　<button id="start" onclick="start()">Start</button>
  　　　　<button id="stop" onclick="stop()" disabled>Stop</button>
  　　　　<button id="reset" onclick="reset()" disabled>Reset</button>
  　　　　<button id="complete" onclick="complete()" disabled>complete</button>
　　　　</div>
      <!--  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />-->
  　　　　<!--<script src="http://code.jquery.com/jquery-1.8.3.js"></script>-->
  　　　　<!--<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>-->

  　　　　<script>
  　　　　　$(function() {
    　　　$( "#datepicker" ).datepicker();
  　　　　});
  　　　　</script>
        </div>
        

    </body>
    @endsection
</html>
