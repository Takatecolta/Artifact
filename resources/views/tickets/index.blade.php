<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>チケット一覧</title>
        <link rel="stylesheet" href="{{ asset('/css/review_view.css') }}">
        <script src="{{ asset('/js/tickets_index.js') }}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>チケット一覧</h1>

        <div class='statuses'>
            <div class='status'>
                <h2>未進行</h2>
                <div class='postscontainer' id='not-in-progress'>
                    <script src="{{ asset('/js/tickets_index.js') }}"></script>
                    @foreach ($tickets as $ticket)
                    <div class='post' draggable='true'>
                        <h4 class="cv">
                        <a href="/tickets/{{ $ticket->id }}">Task-{{ $ticket->id }}</a>
                        </h4>
                        <h3 class='id'>
                            <a href="/tickets/{{ $ticket->id }}">{{ $ticket->title }}</a>
                        </h3>
                        <h4 class="id">
                            <a href="/tickets/{{ $ticket->id }}">{{ $ticket->deadline_date }}</a>
                        </h4>
                        <p class='name'>{{ $ticket->name }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class='status'>
                <h2>進行中</h2>
                <div class='postscontainer' id='in-progress'>
                </div>
            </div>

            <div class='status'>
                <h2>完了</h2>
                <div class='postscontainer' id='completed'>
                </div>
            </div>
        </div>

        <div class='paginate'>
            {{ $tickets->links() }}
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
