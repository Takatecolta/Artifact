<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            h1 {
                text-align: center;
                margin-top: 50px;
            }
            .posts {
                margin-top: 30px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .post {
                border: 1px solid black;
                padding: 20px;
                margin-bottom: 20px;
                width: 80%;
                max-width: 600px;
            }
            .id {
                margin: 0;
                font-size: 24px;
            }
            .name {
                margin: 0;
                font-size: 18px;
            }
            .edit {
                font-size: 14px;
                margin-top: 5px;
            }
            .paginate {
                display: flex;
                justify-content: center;
                margin-top: 30px;
            }
            .paginate .page-link {
                border: 1px solid black;
                padding: 5px 10px;
                margin: 0 5px;
            }
            .back {
                text-align: center;
                margin-top: 30px;
            }
        </style>
        
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