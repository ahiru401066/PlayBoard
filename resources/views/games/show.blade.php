<!DOCTYPE HTML>
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
                <h2 class="text-xl font-semibold">ゲーム詳細</h2>
            </div>
        </x-slot>

            <!-- Game Title -->
            <h1 class="text-3xl font-bold text-green-800 mb-4 text-center">
                {{ $game->name }}
            </h1>
            
            <!-- Image Section -->
            <div class="flex justify-center mb-6">
                <img src="{{ $game->image_url }}" alt="画像が読み込めません。" class="w-1/2 h-auto rounded-lg shadow-md" />
            </div>
            
            <!-- Game Content -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <h3 class="text-xl font-semibold text-green-800 mb-2">本文</h3>
                <p>{{ $game->body }}</p>
            </div>

            <!-- Level -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <h3 class="text-xl font-semibold text-green-800 mb-2">難易度</h3>
                <p>{{ $game->level }}</p>
            </div>

            <!-- Average Rating -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-6 text-center">
                <h3 class="text-lg font-semibold text-green-800 mb-1">評価</h3>
                <p class="text-base font-medium text-green-800">{{ $rate_avg }}</p>
                <div class="text-yellow-400">
                    @for ($i = 0; $i < $rate_avg; $i++)
                        ★
                    @endfor
                </div>
            </div>

            <!-- Comment Form -->
            <form action="/games/{{ $game->id }}/comment" method="POST" class="bg-white p-6 rounded-lg shadow-md mb-6">
                @csrf
                <div class="mb-4">
                    <h2 class="text-lg font-semibold text-green-800 mb-2">コメント作成</h2>
                    <textarea name="comment[comment]" placeholder="このボードゲームは、..." class="border rounded-md p-2 w-full" rows="4"></textarea>
                </div>
                <x-primary-button>保存</x-primary-button>
            </form>

            <!-- Rating Form -->
            <form action="/games/{{ $game->id }}/rate" method="POST" class="bg-white p-6 rounded-lg shadow-md mb-6">
                @csrf
                <div class="mb-4">
                    <h2 class="text-lg font-semibold text-green-800 mb-2">評価</h2>
                    <div class="flex items-center">
                        <span class="text-sm mr-2">0</span>
                        <input type="range" name="rate[rate]" min="0" max="5" class="w-full" />
                        <span class="text-sm ml-2">5</span>
                    </div>
                </div>
                <x-primary-button>保存</x-primary-button>
            </form>

            <!-- Comments Section -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <h3 class="text-xl font-semibold text-green-800 mb-2">コメント一覧</h3>
                @foreach($game->comments as $comment)
                    <div class="mb-4 border-b border-gray-200 pb-2">
                        <p class="font-medium text-green-800">{{ $comment->user->name }}</p>
                        <p>{{ $comment->comment }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Footer -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6 text-center">
                @can('admin-higher')
                    <div class="mb-4">
                        <a href="/games/{{ $game->id }}/edit" class="text-green-600 hover:text-green-800">編集</a>
                    </div>
                @endcan
            </div>
        </div>
    </x-app-layout>
</body>
</html>
