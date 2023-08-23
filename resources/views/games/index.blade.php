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
            index
        </x-slot>
        <body>
            <h1>Board Game</h1>
            <div class="games">
                @foreach ($games as $game)
                <div class="game">
                    <h2 class='title'>
                        <a href="/games/{{ $game->id }}">{{ $game->title }}</a>
                    </h2>
                    <p class="body">{{ $game->body }}</p>
                    <form action="/games/{{ $game->id }}" id="form_{{ $game->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $game->id }})">delete</button>
                    </form>
                </div>
                @endforeach
            </div>
            <dev class='paginate'>
                {{ $games->links() }}
            </dev>
            <a href='/games/create'>create</a>
            
            <script>
                function deletePost(id) {
                    'use strict'
                    
                    if (confirm('削除すると復元できません。\n本当に削除しますか?')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>