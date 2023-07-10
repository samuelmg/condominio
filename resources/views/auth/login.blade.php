@extends('layouts.auth')

@section('body')
<div class="w-full max-w-sm mx-auto">
    <div class="text-center">
        <div class="flex items-center justify-center">
            <img class="w-auto h-12" src="/assets/images/logo.svg" alt="">
        </div>

        <h1 class="mt-6 text-3xl font-semibold text-gray-700">Sign in</h1>
        
        <p class="mt-3 text-gray-500">Sign in to access your account</p>
    </div>

    <div class="mt-8">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="tel" class="block mb-2 text-sm text-gray-600">Número de Teléfono</label>
                <input type="number" name="tel" id="tel" placeholder="Teléfono a 10 dígitos (sin comas, guiones o espacios)" :value="old('tel')" required autofocus autocomplete="tel" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md focus:outline-none focus:ring focus:border-indigo-400 focus:ring-indigo-300 focus:ring-opacity-40" />
            </div>

            <div class="mt-6">
                <div class="flex justify-between mb-2">
                    <label for="password" class="text-sm text-gray-600">{{ __('Password') }}</label>
                    @if (Route::has('password.request'))
                        <a href="#" class="text-sm text-gray-400 focus:text-indigo-500 hover:text-indigo-500 hover:underline">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>

                <input type="password" name="password" id="password" placeholder="Your Password" required autocomplete="current-password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md focus:outline-none focus:ring focus:border-indigo-400 focus:ring-indigo-300 focus:ring-opacity-40" />
            </div>

            <div class="mt-6">
                <button
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-400 focus:outline-none focus:bg-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    {{ __('Log in') }}
                </button>
            </div>

            <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="/register" class="text-indigo-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
        </form>
    </div>
</div>
@endsection

{{-- 
<label for="remember_me" class="flex items-center">
    <x-checkbox id="remember_me" name="remember" />
    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
</label>
--}}
