<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PlayBoard</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.cm/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <x-app-layout>
        <x-slot name="header">
            <div class="bg-green-800 text-white py-4 px-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold">ボードゲーム記事編集</h2>
            </div>
        </x-slot>
            <div class="max-w-6xl mx-auto p-4">
                <div class="content">
                    <form action="/games/{{ $game->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title" class="block text-lg font-medium text-gray-700 mb-1">タイトル</label>
                            <input type="text" name="game[name]" id="title" value="{{ $game->name }}" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div>
                            <label for="body" class="block text-lg font-medium text-gray-700 mb-1">本文</label>
                            <textarea type='text' name="game[body]" id="body" rows="4"
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">{{ $game->body }}</textarea>
                        </div>
                        <div>
                            <label for="category" class="block text-lg font-medium text-gray-700 mb-1">カテゴリ</label>
                            <select name="game[category_id]" id="category" 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $game->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="level" class="block text-lg font-medium text-gray-700 mb-1">レベル</label>
                            <input type="text" name="game[level]" id="level" value="{{ $game->level }}" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>   
                        <div>
                            <label for="image" class="block text-lg font-medium text-gray-700 mb-1">画像</label>
                            <input type="file" name="image" id="image" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
    
                        <div class="text-center">
                            <button type="submit" 
                                    class="bg-green-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-green-700 transition">
                                保存
                            </button>
                        </div>            
                    </form>
                </div>
                
                <div class="text-center mt-6">
                    <a href="/games/{{ $game->id }}" 
                       class="text-green-600 hover:text-green-800 transition">戻る</a>
                </div>
        </div>
    </x-app-layout>
    </body>
</html>




            
