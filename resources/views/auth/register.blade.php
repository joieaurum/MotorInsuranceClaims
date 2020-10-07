@extends('auth.layout')

@section('content')
<div class="p-6 bg-indigo-900 min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md">
            <div class="flex justify-center text-white mb-6 text-5xl font-bold">
            <a href="/">
                <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.034 29l-9.067 5.833a5.75 5.75 0 01-5.934.2C1.167 34 0 32.067 0 29.933v-22.6A7.333 7.333 0 017.333 0H10.1A5.784 5.784 0 005 3.033a5.823 5.823 0 00.2 5.934l5.833 9.066 7 10.967z" fill="url(#paint0_linear)"/><path d="M11 18.033L5.166 8.967a5.75 5.75 0 01-.2-5.934C6 1.167 7.933 0 10.066 0h22.6A7.333 7.333 0 0140 7.333V10.1C40 7.967 38.833 6 36.967 5a5.824 5.824 0 00-5.934.2l-9.1 5.8L11 18.033z" fill="url(#paint1_linear)"/><path d="M21.967 11l9.066-5.834a5.75 5.75 0 015.934-.2C38.833 6 40 7.933 40 10.066v22.6A7.334 7.334 0 0132.667 40H29.9c2.133 0 4.1-1.167 5.1-3.034a5.824 5.824 0 00-.2-5.933l-5.833-9.067-7-10.966z" fill="url(#paint2_linear)"/><path d="M29 21.967l5.834 9.066a5.75 5.75 0 01.2 5.934C34 38.833 32.067 40 29.934 40h-22.6A7.333 7.333 0 010 32.667V29.9C0 32.033 1.167 34 3.033 35a5.824 5.824 0 005.934-.2l9.066-5.833 10.967-7z" fill="url(#paint3_linear)"/><defs><linearGradient id="paint0_linear" x1="-1.726" y1="3.889" x2="13.138" y2="29.901" gradientUnits="userSpaceOnUse"><stop stop-color="#78BEFF"/><stop offset="1" stop-color="#5463F8"/></linearGradient><linearGradient id="paint1_linear" x1="32.588" y1=".084" x2="9.278" y2="13.934" gradientUnits="userSpaceOnUse"><stop stop-color="#ADF7D8"/><stop offset="1" stop-color="#25BAAD"/></linearGradient><linearGradient id="paint2_linear" x1="40.647" y1="32.633" x2="25.107" y2="9.493" gradientUnits="userSpaceOnUse"><stop stop-color="#FFEF9C"/><stop offset="1" stop-color="#F8BD4F"/></linearGradient><linearGradient id="paint3_linear" x1="-.003" y1="30.977" x2="35.737" y2="30.977" gradientUnits="userSpaceOnUse"><stop stop-color="#F79788"/><stop offset="1" stop-color="#EF4A66"/></linearGradient></defs></svg>
            </a>
            </div>
            <div class="flex flex-col break-words bg-white border border-2 rounded-lg shadow-lg overflow-hidden">
                <form class="" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="px-6 py-8 md:p-10">

                        <h1 class="text-center font-bold text-3xl">
                            {{ __('Register') }}
                        </h1>

                        <div class="mx-auto mt-6 w-24 border-b-2 border-gray-200"></div>

                        <div class="mt-8 flex flex-wrap mb-6">
                            <label for="name" class="block text-gray-700 text-sm mb-2">
                                {{ __('Full Name') }}:
                            </label>

                            <div class="table w-full">
                                <input id="name" type="text" class="table-cell relative appearance-none bg-gray-200 rounded-l w-full p-3 text-gray-700 focus:shadow-outline{{ $errors->has('name') ? ' border-red-500' : '' }}" name="name" value="{{ old('name') }}" placeholder="John Doe" required autofocus>
                            </div>

                            @if ($errors->has('name'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm mb-2">
                                Email Address:
                            </label>

                            <input id="email" type="email" class="appearance-none bg-gray-200 rounded w-full p-3 text-gray-700 focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}" placeholder="johndoe@example.com" required>

                            @if ($errors->has('email'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm mb-2">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="appearance-none bg-gray-200 rounded w-full p-3 text-gray-700 focus:shadow-outline{{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" placeholder="********" required>

                            @if ($errors->has('password'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm" class="block text-gray-700 text-sm mb-2">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="appearance-none bg-gray-200 rounded w-full p-3 text-grey-700 focus:shadow-outline" name="password_confirmation" placeholder="********" required>

                            @if ($errors->has('password_confirmation'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('password_confirmation') }}
                                </p>
                            @endif
                        </div>

                    </div>

                    <div class="px-6 md:px-10 py-4 bg-grey-50 border-t border-grey-200 flex flex-wrap items-center">
                        <button type="submit" class="bg-teal-400 w-full hover:bg-pink-300 text-pink-900 font-bold py-3 px-4 rounded focus:outline-none">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
            @if (Route::has('register'))
                <p class="w-full text-xs text-center text-indigo-100 mt-6">
                    Already have an account?
                    <a class="text-white hover:text-indigo-50 no-underline" href="{{ route('login') }}">
                        Login
                    </a>
                </p>
            @endif
        </div>
    </div>
@endsection
