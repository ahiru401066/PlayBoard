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
            <div>
                <img src="{{ $game->image_url }}" alt="画像が読み込めません。" />
            </div>
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
                    0<input type="range" name="rate[rate]" placeholder="評価" min="0" max="5">5
                </div>
                <input type="submit" value="store">
            </form>
            <div>
                @foreach($game->comments as $comment)
                    <p>{{ $comment->user->name }}</p>
                    <p>{{ $comment->comment}}</p>
                @endforeach
            </div>
            <div>
                <p>{{ $rate_avg }}</p>
                @for ($i = 0; $i<$rate_avg; $i++)
                    ★
                @endfor
            </div>
            <div class="footer">
                <div>#########################################</div>
                <div class="edit"><a href="/games/{{ $game->id }}/edit">edit</a></div>
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>