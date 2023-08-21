<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Game</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            create
        </x-slot>
        <body>
            <h1>Board Game</h1>
            <form action="/games" method="POST">
                @csrf
                <div class="title">
                    <h2>Title</h2>
                    <input type="text" name="game[title]" placeholder="タイトル">
                    <p class="title__error" style="color:red">{{ $errors->first('game.title') }}</p>
                </div>
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="game[body]" placeholder="今日も1日お疲れ様でした。"></textarea>
                </div>
                <input type="submit" value="store">
            </form>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>