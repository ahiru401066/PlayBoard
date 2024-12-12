<x-app-layout>
    <x-slot name="header">
        <div class="bg-green-800 text-white py-4 px-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold">{{ __('ダッシュボード') }}</h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-2xl font-bold text-green-800 mb-4">
                        {{ __("ようこそ、PlayBoardへ!!") }}
                    </div>
                    <p class="text-gray-600">
                        {{ __("ボードゲームがもっと身近に。PlayBoardで遊びの世界を広げてみよう！") }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
