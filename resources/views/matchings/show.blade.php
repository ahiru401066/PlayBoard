<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>BoardGame</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        <div class="bg-green-800 text-white py-4 px-6 rounded-lg shadow-lg flex justify-between items-center">
            <div class="text-xl font-semibold">Matching</div>
            <a href="/matchings/index" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">戻る</a>
        </div>
    </x-slot>
    <body class="bg-gray-50 font-sans">
        <div class="max-w-4xl mx-auto p-6">
            <!-- Matching Details -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h1 class="text-3xl font-bold text-green-800 mb-4">Matching</h1>
                <div class="text-lg font-medium text-gray-700 mb-2">
                    <p>Matching ID: {{ $matching->id }}</p>
                    <p>日時：{{ $matching->date }}</p>
                </div>
            </div>

            <!-- User List -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h2 class="text-2xl font-bold text-green-800 mb-4">参加ユーザー</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($matching->users as $user)
                        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                            <p class="text-green-800 font-semibold">{{ $user->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- User Participation -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                @if ($is_join)
                <form action="/matchings/{{ $matching->id }}/cancel" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition duration-300">参加取り消し</button>
                </form>
                @else
                <form action="/matchings/{{ $matching->id }}/join" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">参加する</button>
                </form>
                @endif
            </div>

            <!-- User Opinion Form -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Opinion</h2>
                <form action="/matchings/{{ $matching->id }}/opinion" method="POST">
                    @csrf
                    <textarea name="opinion[opinion]" placeholder="コメントサンプル" class="w-full p-3 border border-gray-300 rounded-md mb-4"></textarea>
                    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">Store</button>
                </form>
            </div>

            <!-- Display Opinions -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Opinions</h2>
                @foreach($matching->opinions as $opinion)
                    <div class="bg-teal-50 p-4 rounded-lg shadow-sm mb-4">
                        <p class="text-green-800 font-semibold">{{ $opinion->user->name }}</p>
                        <p class="text-green-600">{{ $opinion->opinion }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</x-app-layout>
</html>
