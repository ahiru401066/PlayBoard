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
            <div class="max-w-6xl mx-auto rounded-sm">
                <h1 class="text-6xl bg-slate-200 w-96 px-8 mx-auto my-2 border-slate-500 border-2">BoardGame</h1>
                <div class="bg-slate-200 flex flex-wrap p-8">
                    @foreach ($games as $game)
                    <div class="bg-green-200 border-2 border-cyan-200 p-8">
                        <h2 class='title'>
                            <a href="/games/{{ $game->id }}">{{ $game->name }}</a>
                        </h2>
                        <p class="body">{{ $game->body }}</p>
                        <a href="/categories/{{ $game->category->id }}">{{ $game->category->category }}</a>
                        <div>
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