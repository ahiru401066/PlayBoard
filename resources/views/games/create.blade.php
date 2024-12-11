<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlayBoard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <x-app-layout>
        <x-slot name="header">
            <div class="bg-green-800 text-white py-4 px-6 rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold">PlayBoard</h2>
            </div>
        </x-slot>

        <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
            <h1 class="text-3xl font-bold text-green-900 mb-6 text-center">Create a New Game</h1>
            <form action="/games" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <!-- Name -->
                <div>
                    <label for="name" class="block text-lg font-semibold text-gray-700 mb-2">Name</label>
                    <input type="text" id="name" name="game[name]" placeholder="タイトル" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" />
                    @if ($errors->has('game.name'))
                        <p class="text-red-500 text-sm mt-1">{{ $errors->first('game.name') }}</p>
                    @endif
                </div>

                <!-- Body -->
                <div>
                    <label for="body" class="block text-lg font-semibold text-gray-700 mb-2">Body</label>
                    <textarea id="body" name="game[body]" placeholder="今日も1日お疲れ様でした。" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" rows="4"></textarea>
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-lg font-semibold text-gray-700 mb-2">Category</label>
                    <select id="category" name="game[category_id]" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Additional Fields -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="level" class="block text-lg font-semibold text-gray-700 mb-2">Level</label>
                        <input type="text" id="level" name="game[level]" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" />
                    </div>
                </div>

                <!-- Image Upload -->
                <div>
                    <label for="image" class="block text-lg font-semibold text-gray-700 mb-2">Image</label>
                    <input type="file" id="image" name="image" class="w-full p-3 border border-gray-300 rounded-md shadow-sm" />
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-green-600 text-white rounded-lg py-2 px-4 shadow-md hover:bg-green-700 transition">Store</button>
                </div>
            </form>

            <!-- Footer -->
            <div class="text-center mt-6">
                <a href="/" class="text-green-600 hover:text-green-800">戻る</a>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
