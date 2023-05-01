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
            @foreach ($users as $user)
                <div class='post'>
                    <h2 class='id'>
                       <a href="/posts/{{ $user->id }}">{{ $user->id }}</a>
                    </h2>
                    <p class='name'>{{ $user->name }}</p>
                    <h2 class='make'>
                        [<a href='/posts/create'>create</a>]
                    </h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $users->links() }}
        </div>
    </body>
</html>