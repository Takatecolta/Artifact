<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="{{ asset('/css/myhome.css')  }}" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.8/index.global.min.js'></script>
        <script>

          document.addEventListener('DOMContentLoaded', function() {
           var calendarEl = document.getElementById('calendar');
           var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            eventTimeFormat: { hour: 'numeric', minute: '2-digit' }
           });
           calendar.render();
          });

        </script>
    </head>
    <body>
        <nav>
  　　　 　<div class="nav-buttons">
    　　　<a href="/reviews/create" class="btn">レビューをする</a>
    　　　<a href="/reviews/index" class="btn">レビュー一覧</a>
    　　　<a class="btn">ユーザー一覧</a>
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
        <div>
        
        <!-- スタート・ストップ・リセットボタン -->
        <div class="btn">
  　　　　<button id="start" onclick="start()">Start</button>
  　　　　<button id="stop" onclick="stop()" disabled>Stop</button>
  　　　　<button id="reset" onclick="reset()" disabled>Reset</button>
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
        </div>
        

    </body>
    @endsection
</html>
