<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>PlayBoard</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        <div class="bg-green-800 text-white py-4 px-6 rounded-lg shadow-md text-center">
            <h2 class="text-xl font-semibold">マッチング</h2>
        </div>
    </x-slot>
    <body class="bg-gray-100 font-sans">
        <div class="max-w-4xl mx-auto p-6">
            <!-- Matching Creation Form -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h1 class="text-2xl font-bold text-green-700 mb-4">マッチングの作成</h1>
                <form action="/matchings/create" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <select name="matching[category_id]" class="w-full p-3 border border-gray-300 rounded-md">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                        <input type="text" name="matching[date]" placeholder="2000/00/00" class="w-full p-3 border border-gray-300 rounded-md">
                        <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-md hover:bg-green-700 transition duration-300">作成</button>
                    </div>
                </form>
            </div>

            <!-- Matching Participation Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="text-2xl font-bold text-green-700 mb-4">マッチングに参加</h1>
                @foreach ($matchings as $matching)
                    <div class="bg-green-50 border border-green-200 p-4 rounded-lg shadow-sm mb-4">
                        <a href="/matchings/{{ $matching->id }}" class="text-xl font-semibold text-green-600 hover:underline">マッチング部屋{{ $matching->id }} - {{ $matching->category->category }}</a>
                        <p class="text-gray-700">{{ $matching->date }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</x-app-layout>
</html>
