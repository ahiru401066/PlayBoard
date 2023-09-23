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
            <form action="/games" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="title">
                    <h2>Name</h2>
                    <input type="text" name="game[name]" placeholder="タイトル">
                    <p class="name__error" style="color:red">{{ $errors->first('game.name') }}</p>
                </div>
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="game[body]" placeholder="今日も1日お疲れ様でした。"></textarea>
                </div>
                <div>
                    <select name="game[category_id]">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <p>number</p>
                    <input type="text" name="game[number]">
                    <p>game_time</p>
                    <input type="text" name="game[game_time]">
                    <p>release</p>
                    <input type="text" name="game[release]">
                    <p>level</p>
                    <input type="text" name="game[level]">
                </div>
                <div class="image">
                    <input type="file" name="image">
                </div>
                <input type="submit" value="store">
            </form>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>