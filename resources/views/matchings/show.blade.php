<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>BoardGame</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            .header-bg {
                background-color: #3a5f40; /* Deep forest green */
                color: #f7fafc; /* White text */
                border-radius: 0.75rem; /* More rounded corners */
                padding: 1rem 2rem; /* Increased padding */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Soft shadow */
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .btn-primary {
                background-color: #2f855a; /* Strong green for buttons */
                color: #2d3748; /* Dark gray text */
                font-size: 1.25rem; /* Larger text size */
                font-weight: bold; /* Bold text */
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.25); /* Subtle text shadow */
                border-radius: 0.75rem; /* Rounded corners */
                padding: 0.75rem 1.5rem; /* More padding */
                border: 2px solid #276749; /* Darker green border */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow */
                transition: background-color 0.3s ease, box-shadow 0.3s ease;
                display: inline-block;
                text-align: center;
            }
            .btn-primary:hover {
                background-color: #38a169; /* Lighter green on hover */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
            }
            .input-field, .textarea-field {
                border-radius: 0.5rem; /* Rounded corners */
                border: 1px solid #cbd5e0; /* Light gray border */
                padding: 0.5rem;
                margin-bottom: 1rem;
                width: 100%;
            }
            .card-bg {
                background-color: #f0fff4; /* Soft light green */
                border-radius: 1rem; /* Rounded corners */
                padding: 2rem; /* More padding */
                margin-bottom: 2rem;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
            }
            .footer-link {
                color: #3b7979; /* Soft teal */
                text-decoration: none;
            }
            .footer-link:hover {
                text-decoration: underline;
            }
            .container {
                max-width: 900px;
                margin: 0 auto;
                padding: 2rem;
            }
            .section-title {
                font-size: 2rem;
                font-weight: bold;
                color: #2f855a; /* Strong green */
                margin-bottom: 1rem;
                border-bottom: 2px solid #2f855a;
                padding-bottom: 0.5rem;
            }
            .user-list {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                margin-bottom: 2rem;
            }
            .user-item {
                background-color: #edf2f7; /* Light gray background */
                padding: 1rem;
                border-radius: 0.5rem;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
                flex: 1 1 45%; /* Flexible sizing */
            }
            .opinion-item {
                margin-bottom: 1rem;
                padding: 1rem;
                border-radius: 0.5rem;
                background-color: #e6fffa; /* Light teal background */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            }
        </style>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div class="header-bg">
                <div class="text-xl font-semibold">Matching</div>
                <a href="/matchings/index" class="btn-primary">戻る</a>
            </div>
        </x-slot>
        <body class="bg-gray-50">
            <div class="container">
                <h1 class="section-title">Matching</h1>

                <div class="card-bg">
                    <h2 class="text-2xl font-bold text-green-800 mb-4">Matching Details</h2>
                    <p class="text-lg font-medium">Matching ID: {{ $matching->id }}</p>
                    <p class="text-lg">日時：{{ $matching->date }}</p>
                </div>

                <div class="card-bg">
                    <h2 class="text-2xl font-bold text-green-800 mb-4">参加ユーザー</h2>
                    <div class="user-list">
                        @foreach($matching->users as $user)
                            <div class="user-item">
                                <p class="text-green-800 font-semibold">{{ $user->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- User Participation -->
                <div class="card-bg">
                    @if ($is_join)
                    <form action="/matchings/{{ $matching->id}}/cancel" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="参加取り消し" class="btn-primary cursor-pointer">
                    </form>
                    @else
                    <form action="/matchings/{{ $matching->id}}/join" method="POST">
                        @csrf
                        <input type="submit" value="参加する" class="btn-primary cursor-pointer">
                    </form>
                    @endif
                </div>

                <!-- User Opinion Form -->
                <div class="card-bg">
                    <h2 class="text-2xl font-bold text-green-800 mb-4">Opinion</h2>
                    <form action="/matchings/{{ $matching->id }}/opinion" method="POST">
                        @csrf
                        <textarea name="opinion[opinion]" placeholder="コメントサンプル" class="textarea-field"></textarea>
                        <input type="submit" value="Store" class="btn-primary cursor-pointer">
                    </form>
                </div>

                <!-- Display Opinions -->
                <div class="card-bg">
                    <h2 class="text-2xl font-bold text-green-800 mb-4">Opinions</h2>
                    @foreach($matching->opinions as $opinion)
                        <div class="opinion-item">
                            <p class="text-green-800 font-semibold">{{ $opinion->user->name }}</p>
                            <p class="text-green-600">{{ $opinion->opinion }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </body>
    </x-app-layout>
</html>
