@extends('layouts.auth')

@section('body')
<div class="w-full max-w-sm mx-auto">
    <div class="text-center">
        <div class="flex items-center justify-center">
            <img class="w-auto h-12" src="{{ asset('images/logo.svg') }}">
        </div>
        <h1 class="mt-6 text-3xl font-semibold text-gray-700">Crear cuenta</h1>
        <p class="mt-3 text-gray-500">Registrate y crea un nuevo condominio</p>
    </div>

    <div class="mt-8">
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm text-gray-600">{{ __('Name') }}</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md focus:outline-none focus:ring focus:border-indigo-400 focus:ring-indigo-300 focus:ring-opacity-40" />
            </div>

            <div class="mt-6">
                <label for="email" class="block mb-2 text-sm text-gray-600">{{ __('Email') }}</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md focus:outline-none focus:ring focus:border-indigo-400 focus:ring-indigo-300 focus:ring-opacity-40" />
            </div>

            <div class="mt-6">
                <label for="password" class="block mb-2 text-sm text-gray-600">{{ __('Password') }}</label>

                <input type="password" name="password" id="password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md focus:outline-none focus:ring focus:border-indigo-400 focus:ring-indigo-300 focus:ring-opacity-40" />
            </div>

            <div class="mt-6">
                <label for="password_confirmation" class="block mb-2 text-sm text-gray-600">{{ __('Confirm Password') }}</label>

                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md focus:outline-none focus:ring focus:border-indigo-400 focus:ring-indigo-300 focus:ring-opacity-40" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="mt-6">
                <button
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-400 focus:outline-none focus:bg-indigo-400 focus:ring-indigo-300 focus:ring focus:ring-opacity-50">
                    {{ __('Register') }}
                </button>
            </div>

            <p class="mt-6 text-sm text-center text-gray-400">{{ __('Already registered?') }} <a href="{{ route('login') }}" class="text-indigo-500 focus:outline-none focus:underline hover:underline">{{ __('Register') }}</a>.</p>
        </form>
    </div>
</div>
@endsection
