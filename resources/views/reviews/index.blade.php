<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>チケット一覧</title>
        <link rel="stylesheet" href="{{ asset('/css/review_view.css')  }}" >
        <script src="{{ asset('/js/reviews_index.js') }}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <h1>チケット一覧</h1>

    <div class='statuses'>
     <div class='status'>
        <h2>未進行</h2>
        <div class='postscontainer'>
            <script src="{{ asset('/js/reviews_index.js') }}"></script>
            @foreach ($reviews as $review)
                <div class='post', draggable='true'>
                    <h2 class='id'>
                        <a href="/reviews/{{ $review->id }}">{{ $review->id }}</a>
                    </h2>
                    <p class='name'>{{ $review->name }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class='status'>
        <h2>進行中</h2>
        <div class='postscontainer'>
        </div>
    </div>

    <div class='status'>
        <h2>完了</h2>
        <div class='postscontainer'>
        </div>
    </div>
    </div>

    <div class='paginate'>
         {{ $reviews->links() }}
    </div>
    <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>