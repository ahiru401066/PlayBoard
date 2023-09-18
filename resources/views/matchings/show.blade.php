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
            Matching
        </x-slot>
        <body>
            <h1>Matching</h1>
            <div>
                <p>{{ $matching->id }}</p>
                <p>日時：{{ $matching->date }}</p>
                <p>############################</p>
                <p>参加ユーザー</p>
                @foreach($matching->users as $user)
                    <p>{{ $user->name }}</p>
                @endforeach
            </div>
            <!--userの参加作成-->
            <div>
                @if ($is_join)
                <form action="/matchings/{{ $matching->id}}/cancel" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="参加取り消し">
                </form>
                @else
                <form action="/matchings/{{ $matching->id}}/join" method="POST">
                    @csrf
                    <input type="submit" value="参加する">
                </form>
                @endif
            </div>
            
            <div class = "footer">
                <a href="/matchings/index">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>