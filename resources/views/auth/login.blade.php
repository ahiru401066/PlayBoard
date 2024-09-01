<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto p-6 bg-white shadow-md rounded-lg">
        @csrf

        <div class="text-center mb-6">
            <h1 class="text-6xl text-green-800 font-extrabold bg-gradient-to-r from-green-400 to-green-600 bg-clip-text text-transparent leading-tight">
                PlayBoard
            </h1>
        </div>
        
        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" class="text-green-800" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="text-green-800" />

            <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Remember Me -->
        <div class="block mb-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mb-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-green-600 hover:text-green-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="bg-green-800 hover:bg-green-600 text-white">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    
    <!-- Register -->
    <div class="flex items-center justify-center mt-4">
        <x-primary-button class="bg-green-800 hover:bg-green-600 text-white">
            <a href="auth/register">Register</a>
        </x-primary-button>
    </div>
</x-guest-layout>
