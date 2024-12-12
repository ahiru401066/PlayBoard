<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlayBoard</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <x-app-layout>
        <x-slot name="header">
            <div class="bg-green-800 text-white py-4 px-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold">ボードゲーム</h2>
            </div>
        </x-slot>

        <div class="max-w-6xl mx-auto p-4">
            <div class="flex flex-wrap p-4">
                @foreach ($games as $game)
                <div class="border border-gray-200 bg-white p-6 md:m-2 w-full md:w-80 flex-1 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <h2 class='text-3xl text-green-900 text-center mb-2'>
                        <a href="/games/{{ $game->id }}" class="hover:text-green-700">{{ $game->name }}</a>
                    </h2>
                    <div class="text-green-600 text-center mb-4">
                        <a href="/categories/{{ $game->category->id }}" class="hover:text-green-800">{{ $game->category->category }}</a>
                    </div>
                    <div class="max-w-xs mx-auto mb-4">
                        <img src="{{ $game->image_url }}" alt="画像が読み込めません。" class="w-full h-auto rounded-lg shadow-sm" />
                    </div>
                    @can('admin-higher')
                    <form action="/games/{{ $game->id }}" id="form_{{ $game->id }}" method="post" class="text-center mt-4">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="bg-red-600 text-white rounded p-2 shadow-md hover:bg-red-700 transition" onclick="deletePost({{ $game->id }})">Delete</button>
                    </form>
                    @endcan
                </div>
                @endforeach
            </div>
            
            <div class='flex justify-center mt-8'>
                {{ $games->links() }}
            </div>
            
            @can('admin-higher')
            <div class="flex justify-center mt-8">
                <a href='/games/create' class="bg-green-600 text-white rounded p-3 shadow-lg hover:bg-green-700 transition">Create</a>
            </div>
            @endcan
        </div>
    </x-app-layout>

    <script>
        function deletePost(id) {
            'use strict';
            
            if (confirm('削除すると復元できません。\n本当に削除しますか?')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</body>
</html>
