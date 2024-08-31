<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>BoardGame</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-white leading-tight header-bg p-4">Board Game</h2>
        </x-slot>
        <body>
            <div class="max-w-6xl mx-auto rounded-sm p-4">
                <h1 class="text-6xl text-green-900 w-96 px-8 mx-auto my-4">BoardGame</h1>
                <div class="flex flex-wrap p-8">
                    @foreach ($games as $game)
                    <div class="border-2 card-border p-8 md:m-2 w-80 flex-1 rounded-lg card-bg shadow-md">
                        <h2 class='w-80 text-3xl flex justify-center text-green-900'>
                            <a href="/games/{{ $game->id }}" class="hover:text-green-700">{{ $game->name }}</a>
                        </h2>
                        <div class="flex items-center justify-end text-green-600">
                            <a href="/categories/{{ $game->category->id }}">{{ $game->category->category }}</a>
                        </div>
                        <div class="max-w-xs mt-4">
                            <img data:image/png;base64 src="{{ $game->image_url }}" alt="画像が読み込めません。" class="rounded-lg shadow-sm" />
                        </div>
                        @can('admin-higher')
                        <form action="/games/{{ $game->id }}" id="form_{{ $game->id }}" method="post" class="mt-4">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn-delete rounded p-2 shadow-md hover:bg-red-600" onclick="deletePost({{ $game->id }})">Delete</button>
                        </form>
                        @endcan
                    </div>
                    @endforeach
                </div>
            </div>
            <div class='paginate flex justify-center mt-8'>
                {{ $games->links() }}
            </div>
            @can('admin-higher')
            <div class="flex justify-center mt-8">
                <a href='/games/create' class="btn-create rounded p-3 shadow-lg hover:bg-green-500">Create</a>
            </div>
            @endcan
            
            <script>
                function deletePost(id) {
                    'use strict';
                    
                    if (confirm('削除すると復元できません。\n本当に削除しますか?')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>
