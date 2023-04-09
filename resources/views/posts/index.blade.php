<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>レビュー一覧</h1>
        <div class='posts'>
            @foreach ($users as $user)
                <div class='post'>
                    <h2 class='id'>
                       <a href="/posts/{{ $user->id }}">{{ $user->id }}</a>
                    </h2>
                    <p class='name'>{{ $user->name }}</p>
                    <p class="edit">[<a href="/posts/{{ $user->id }}/edit">edit</a>]</p>
                </div>
            @endforeach
        </div>
        <form action="/posts/{{ $user->id }}" id="form_{{ $user->id }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button> 
        </form>
        <div class='paginate'>
            {{ $users->links() }}
        </div>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>