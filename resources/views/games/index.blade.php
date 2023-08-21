<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>BoardGame</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.cm/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Board Game</h1>
        <div class="games">
            @foreach ($games as $game)
            <div class="game">
                <h2 class='title'>
                    <a href="/games/{{ $game->id }}">{{ $game->title }}</a>
                </h2>
                <p class="body">{{ $game->body }}</p>
            </div>
            @endforeach
        </div>
        <dev class='paginate'>
            {{ $games->links() }}
        </dev>
        <a href='/games/create'>create</a>
    </body>
</html>