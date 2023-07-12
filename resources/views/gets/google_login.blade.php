@extends('layouts.app')

@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>googleログイン</title>
         <link rel="stylesheet" href="{{ asset('images/logo.ping')  }}" >
         <script src="https://apis.google.com/js/platform.js" async defer></script>
         <meta name="google-signin-client_id" content="226831160502-kg3ccaqqsn3ed7gs2mgkigvmmphccqu4.apps.googleusercontent.com">
    </head>
    <body>
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <script>
            function onSignIn(googleUser) {
             var profile = googleUser.getBasicProfile();
             console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
             console.log('Name: ' + profile.getName());
             console.log('Image URL: ' + profile.getImageUrl());
             console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            }
        </script>
         <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>