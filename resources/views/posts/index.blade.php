<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($user as $user)
                <div class='post'>
                    <h2 class='id'>{{ $user->id }}</h2>
                    <p class='name'>{{ $user->name }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>