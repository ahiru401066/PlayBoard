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
            <h1>Matchingの作成</h1>
            <form action="/matchings/create" method="POST">
                @csrf
                <div>
                    <select name="matching[category_id]">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="matching[date]" placeholder="2000/00/00">
                </div>
                <input type="submit" value="store">
            </form>
            <h1>Matchingに参加</h1>
            @foreach ($matchings as $matching)
                <a href="/matchings/{{ $matching->id }}"><p>matching部屋{{ $matching->id }}</p></a>
                <p>{{ $matching->category->category }}</p>
                <p>{{ $matching->date }}</p>
                <p>############################</p>
                @can('admin-higher')
                <form action="/matchings/{{ $matching->id }}" id="form_{{ $matching->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $matching->id }})">delete</button>
                </form>
                @endcan
            @endforeach
            <dev class='paginate'>
                {{ $matchings->links() }}
            </dev>
            
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