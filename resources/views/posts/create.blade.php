<!--<!DOCTYPE HTML>-->
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
<!--    <head>-->
<!--        <meta charset="utf-8">-->
<!--        <title>Blog</title>-->
<!--        <style>-->
<!--        body {-->
<!--        font-family: 'Helvetica Neue', sans-serif;-->
<!--        background-color: #f2f2f2;-->
<!--        }-->
        
<!--        h1 {-->
<!--        text-align: center;-->
<!--        margin-top: 50px;-->
<!--        }-->
        
<!--        form {-->
<!--        width: 80%;-->
<!--        max-width: 600px;-->
<!--        margin: 0 auto;-->
<!--        background-color: #fff;-->
<!--        padding: 20px;-->
<!--        border-radius: 5px;-->
<!--        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);-->
<!--        }-->
        
<!--        input[type="text"], textarea {-->
<!--        display: block;-->
<!--        width: 100%;-->
<!--        margin: 10px 0;-->
<!--        padding: 10px;-->
<!--        font-size: 16px;-->
<!--        border-radius: 5px;-->
<!--        border: 1px solid #ccc;-->
<!--        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);-->
<!--        }-->
        
<!--        input[type="submit"] {-->
<!--        display: block;-->
<!--        margin: 20px auto 0;-->
<!--        padding: 10px 20px;-->
<!--        background-color: #008CBA;-->
<!--        color: #fff;-->
<!--        font-size: 18px;-->
<!--        border-radius: 5px;-->
<!--        border: none;-->
<!--        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);-->
<!--        cursor: pointer;-->
<!--        }-->
        
<!--         .back {-->
<!--        text-align: center;-->
<!--        margin-top: 30px;-->
<!--        }-->
        
<!--        back a {-->
<!--        color: #008CBA;-->
<!--        text-decoration: none;-->
<!--        font-size: 16px;-->
<!--        }-->
   
<!--　　　　</style>-->

<!--    </head>-->
<!--    <body>-->
<!--        <h1>Blog Name</h1>-->
<!--        <form action="/posts" method="POST">-->
<!--            @csrf-->
<!--            <div class="title">-->
<!--                <h2>Title</h2>-->
<!--                <input type="text" name="post[title]" placeholder="タイトル"/>-->
<!--            </div>-->
<!--            <div class="body">-->
<!--                <h2>Body</h2>-->
<!--                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。"></textarea>-->
<!--            </div>-->
<!--            <input type="submit" value="保存"/>-->
<!--        </form>-->
<!--        <div class="back">[<a href="/posts/index">back</a>]</div>-->
<!--    </body>-->
<!--</html>-->