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
    </head>
    <body>
        <p>{{Auth::user()->name}}</p>
        <a href="/reviews/create">レビューをする</a>
        <a href="/reviews/index">レビュー一覧</a>
        <a>ユーザー一覧</a>
        <a href="/gets/index">集計</a>
        
        <p id="RealtimeClockArea"></p>
        <script src="{{ asset('/js/myhome.js') }}"></script>
        
        
        
        
        <div class="wrapper">
        <p><a>時間を測る</a></p>
        <!-- 計測時間を表示 -->
        <div id="time">00:00.000</div>
        <div>
        
        <!-- スタート・ストップ・リセットボタン -->
        <button id="start" onclick="start()">Start</button>
        <button id="stop" onclick="stop()" disabled>Stop</button>
        <button id="reset" onclick="reset()" disabled>Reset</button>
        </div>
        </div>
        

    </body>
    @endsection
</html>
