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
            @foreach ($reviews as $review)
                <div class='post'>
                    <h2 class='id'>
                       <a href="/reviews/{{ $review->id }}">{{ $review->id }}</a>
                    </h2>
                    <p class='name'>{{ $review->name }}</p>
                    <h2 class='make'>
                        [<a href='/reviews/create'>create</a>]
                    </h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $review->links() }}
        </div>
    </body>
</html>