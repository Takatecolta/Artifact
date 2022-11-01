<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <p>{{Auth::user()->name}}</p>
        <a href="/reviews/create">レビュー</a>
        <a href="/posts/index">ユーザー</a>
        <a href="/gets/index">集計</a>
        
        <p id="RealtimeClockArea"></p>
        <script>
           function set2fig(num) {
           // 桁数が1桁だったら先頭に0を加えて2桁に調整する
           var ret;
           if( num < 10 ) { ret = "0" + num; }
           else { ret = num; }
           return ret;
          }
           function showClock2() {
           var nowTime = new Date();
           var nowHour = set2fig( nowTime.getHours() );
           var nowMin  = set2fig( nowTime.getMinutes() );
           var nowSec  = set2fig( nowTime.getSeconds() );
           var msg = "現在時刻は、" + nowHour + ":" + nowMin + ":" + nowSec + " です。";
           document.getElementById("RealtimeClockArea").innerHTML = msg;
          }
          setInterval('showClock2()',1000);
        </script> 
        <p>時間を測る</p>
    </body>
    @endsection
</html>
