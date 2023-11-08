<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta carset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Games</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Show</h2>
        </x-slot>
        <body>
            <div class="flex mx-20 mt-8 justify-center">
                <div class="mr-10">
                    <h1 class="text-6xl border-gray-600">
                        {{ $game->name }}
                    </h1>
                    <div class="mt-20 mb-7 text-xl w-96">
                        <div class="content__game">
                            <p>{{ $game->body }}</p>
                        </div>   
                    </div>
                    <!--コメント入力-->
                    <form class="mb-5" action="/games/{{ $game->id }}/comment" method="POST">
                        @csrf
                        <div class="comment_body">
                            <h2 class="text-xl">コメントを作成する</h2>
                            <textarea class="w-96" name="comment[comment]" placeholder="コメントサンプル"></textarea>
                        </div>
                       <div class="text-right" >
                            <x-primary-button>
                                <input type="submit" value="保存" class="cursor-pointer text-slate-50">
                            </x-primary-button>
                        </div>
                    </form>
                    <!--評価入力-->
                    <form action="/games/{{ $game->id }}/rate" method="POST">
                        @csrf
                        <div class="rate_body">
                            <h2 class="text-xl">評価</h2>
                            0<input type="range" name="rate[rate]" placeholder="評価" min="0" max="5">5
                        </div>
                        <div class="text-right" >
                            <x-primary-button>
                                <input type="submit" value="保存" class="cursor-pointer text-slate-50">
                            </x-primary-button>
                        </div>
                    </form>
                    <div>
                        @foreach($game->comments as $comment)
                        <div class="bg-gray-50 mt-2 pl-2">
                            <p class="text-lg">{{ $comment->user->name }}</p>
                            <p class="w-72 mt-1">{{ $comment->comment}}</p>
                        </div>
                        @endforeach
                    </div>
                    <div>
                        <p>{{ $rate_avg }}</p>
                        @for ($i = 0; $i<$rate_avg; $i++)
                            ★
                        @endfor
                    </div>
                </div>
                <div>
                    <img data:image/png;base64 src="{{ $game->image_url }}" alt="画像が読み込めません。" />
                </div>
            </div>
            
            <div class="mx-20 my-8 text-right">
                @can('admin-higher')
                <x-primary-button class="mr-3">
                    <a href="/games/{{ $game->id }}/edit" class="block">edit</a>
                </x-primary-button>
                @endcan
                <x-primary-button>
                    <a href="/" class="cursor-pointer text-slate-50 block">戻る</a>
                </x-primary-button>
            </div>
        </body>
    </x-app-layout>
</html>