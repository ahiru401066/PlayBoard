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
                <div class="edit"><a href="/games/{{ $game->id }}/edit">edit</a></div>
            </div>
            <div>
                <form action="/comments/post" method="POST">
                    
                </form>
            </div>
            <div>
                @foreach($comments as $comment)
                    <p></p>
                @endforeach
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>