<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Board Game</h1>
        <div class='category'>
            <h1>カテゴリー</h1>
            <p>カテゴリーの説明があります！カテゴリーの説明があります！カテゴリーの説明があります！カテゴリーの説明があります！カテゴリーの説明があります！カテゴリーの説明があります！</p>
            @foreach ($games as $game)
                <div class='category'>
                    <a href="/games/{{ $game->id }}"><h2 class='name'>{{ $game->name }}</h2></a>
                    <p class='body'>{{ $game->body }}</p>
                    <form action="/games/{{ $game->id }}" id="form_{{ $game->id }}" method="game">
                        @csrf
                        @method('DELETE')
                    <button type="button" onclick="deleteGame({{ $game->id}})">delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <a href="/">戻る</a>
        <div class='paginate'>
            {{ $games->links() }}
        </div>
        <script>
            function deleteGame(id) {
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>