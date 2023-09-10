<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta carset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Games</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            show
        </x-slot>
        <body>
            <h1 class="title">
                {{ $game->name }}
            </h1>
            <div class="content">
                <div class="content__game">
                    <h3>本文</h3>
                    <p>{{ $game->body }}</p>
                </div>   
            </div>
            <!--コメント入力-->
            <form action="/games/{{ $game->id }}/comment" method="POST">
                @csrf
                <div class="comment_body">
                    <h2>create Comment</h2>
                    <textarea name="comment[comment]" placeholder="コメントサンプル"></textarea>
                </div>
                <input type="submit" value="store">
            </form>
            <!--評価入力-->
            <form action="/games/{{ $game->id }}/rate" method="POST">
                @csrf
                <div class="rate_body">
                    <h2>create Rate</h2>
                    <textarea name="rate[rate]" placeholder="評価"></textarea>
                </div>
                <input type="submit" value="store">
            </form>
            <div>
                @foreach($comments as $comment)
                    <p>{{ $comment->user->name }}</p>
                    <p>{{ $comment->comment }}</p>
                @endforeach
            </div>
            <div>
                @foreach($rates as $rate)
                    <p>{{ $rate->rate }}</p>
                @endforeach
            </div>
            <div class="footer">
                <div>#########################################</div>
                <div class="edit"><a href="/games/{{ $game->id }}/edit">edit</a></div>
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>