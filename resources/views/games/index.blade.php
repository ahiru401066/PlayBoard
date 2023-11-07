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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Board Game</h2>
        </x-slot>
        <body>
            <div class="max-w-6xl mx-auto rounded-sm">
                <h1 class="text-6xl text-emerald-900 w-96 px-8 mx-auto my-2">BoardGame</h1>
                <div class="flex flex-wrap p-8">
                    @foreach ($games as $game)
                    <div class="border-2 border-gray-600 p-8 md:m-2 w-80 flex-1">
                        <h2 class='w-80 text-3xl flex justify-center'>
                            <a href="/games/{{ $game->id }}">{{ $game->name }}</a>
                        </h2>
                        <div class="flex items-center justify-end">
                            <a href="/categories/{{ $game->category->id }}">{{ $game->category->category }}</a>
                        </div>
                        <div class="max-w-xs">
                            <img data:image/png;base64 src="{{ $game->image_url }}" alt="画像が読み込めません。" />
                        </div>
                        @can('admin-higher')
                        <form action="/games/{{ $game->id }}" id="form_{{ $game->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $game->id }})">delete</button>
                        </form>
                        @endcan
                    </div>
                    @endforeach
                </div>
            </div>
            <dev class='paginate'>
                {{ $games->links() }}
            </dev>
            @can('admin-higher')
               <a href='/games/create'>create</a>
            @endcan
            
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