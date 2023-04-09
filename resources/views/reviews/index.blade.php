<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビュー一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>レビュー一覧</h1>
        <div class='posts'>
            @foreach ($reviews as $review)
                <div class='post'>
                    <h2 class='id'>
                       <a href="/reviews/{{ $review->id }}">{{ $review->id }}</a>
                    </h2>
                    <p class='name'>{{ $review->name }}</p>
                    
                </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>