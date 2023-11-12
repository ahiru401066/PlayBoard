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
            Matching
        </x-slot>
        <body>
            <div class="m-3">
                
                <div>
                    <p class="text-6xl">Matching部屋{{ $matching->id }}</p>
                    <div class="text-right mr-20">
                        <p class="text-2xl">日時：{{ $matching->date }}</p>
                    </div>
                    
                    <div class="flex justify-center">
                        <!--userの意見交換作成-->
                        <div>
                            <form action="/matchings/{{ $matching->id }}/opinion" method="POST">
                                @csrf
                                <div class="comment_body">
                                    <h2>opinion</h2>
                                    <textarea name="opinion[opinion]" placeholder="コメントサンプル"></textarea>
                                </div>
                                <x-primary-button>
                                    <input type="submit" value="保存" class="cursor-pointer text-slate-50">
                                </x-primary-button>
                            </form>
                            <div>
                                @foreach($matching->opinions as $opinion)
                                <div class="border border-gray-600 p-4 mb-2">
                                    <p>{{ $opinion->user->name }}</p>
                                    <p class="w-96">{{ $opinion->opinion}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div>
                            <p>参加ユーザー</p>
                            @foreach($matching->users as $user)
                                <p>{{ $user->name }}</p>
                            @endforeach
                            <!--userの参加作成-->
                            @if ($is_join)
                            <form action="/matchings/{{ $matching->id}}/cancel" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button>
                                    <input type="submit" value="参加取り消し">
                                </x-primary-button>
                            </form>
                            @else
                            <form action="/matchings/{{ $matching->id}}/join" method="POST">
                                @csrf
                                <x-primary-button>
                                    <input type="submit" value="参加する">
                                </x-primary-button>
                            </form>
                            @endif
                        </div>
                        
                    </div>
                    
                    <!--fooder-->
                    <div class="text-right mr-20">
                        <x-primary-button>
                            <a href="/matchings/index">戻る</a>
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </body>
    </x-app-layout>
</html>