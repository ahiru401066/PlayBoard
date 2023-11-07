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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Matching</h2>
        </x-slot>
        <body>
            <div class="m-5">
                <h1 class="text-3xl font-semibold mb-3">Matchingの作成</h1>
                <form action="/matchings/create" method="POST" class="bg-orange-100">
                    @csrf
                    <div class="p-5">
                        <select name="matching[category_id]">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                        <input type="text" name="matching[date]" placeholder="2000/00/00">
                    </div>
                    <x-primary-button class="ml-5 mb-5">
                        <input type="submit" value="保存" class="cursor-pointer text-slate-50">
                    </x-primary-button>
                </form>
            </div>
            <div class="m-5">
                <h1 class="text-3xl font-semibold mb-3">Matchingに参加</h1>
                @foreach ($matchings as $matching)
                    <div class="border-2 bg-orange-50 mb-3 p-3">
                        <div>
                            <a href="/matchings/{{ $matching->id }}" class="text-2xl mb-3"><p>matching部屋{{ $matching->id }}</p></a>
                            <p>{{ $matching->category->category }}</p>
                            <p>{{ $matching->date }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </body>
    </x-app-layout>
</html>