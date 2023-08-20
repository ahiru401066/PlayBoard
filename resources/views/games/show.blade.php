<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta carset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Games</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $game->title }}
        </h1>
        <div class="content">
            <div class="content__game">
                <h3>本文</h3>
                <p>{{ $game->body }}</p>
            </div>   
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>