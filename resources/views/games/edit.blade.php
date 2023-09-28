<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>BoardGame</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.cm/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            edit
        </x-slot>
        <body>
            <h1 class="title">編集画面</h1>
            <div class="content">
                <form action="/games/{{ $game->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='title'>
                        <h2>タイトル</h2>
                        <input type='text' name='game[name]' value="{{ $game->name }}">
                    </div>
                    <div class='body'>
                        <h2>本文</h2>
                        <textarea type='text' name='game[body]' value="{{ $game->body }}"></textarea> 
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
                    <input type="submit" value="保存">
                </form>
            </div>
            <div class="footer">
                <a href="/games/{{ $game->id }}">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>