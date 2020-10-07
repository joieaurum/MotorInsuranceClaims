<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://rsms.me/inter/inter.css" rel="stylesheet">
    
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="px-8 py-12 max-w-xl mx-auto lg:max-w-full lg:px-0 lg:py-20 lg:relative lg:min-h-screen">
    <div class="xl:max-w-6xl lg:mx-auto">
      <div class="lg:w-7/12 lg:pl-12 lg:pr-8">
        <div class="flex align-middle">
          <div>
            <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.034 29l-9.067 5.833a5.75 5.75 0 01-5.934.2C1.167 34 0 32.067 0 29.933v-22.6A7.333 7.333 0 017.333 0H10.1A5.784 5.784 0 005 3.033a5.823 5.823 0 00.2 5.934l5.833 9.066 7 10.967z" fill="url(#paint0_linear)"/><path d="M11 18.033L5.166 8.967a5.75 5.75 0 01-.2-5.934C6 1.167 7.933 0 10.066 0h22.6A7.333 7.333 0 0140 7.333V10.1C40 7.967 38.833 6 36.967 5a5.824 5.824 0 00-5.934.2l-9.1 5.8L11 18.033z" fill="url(#paint1_linear)"/><path d="M21.967 11l9.066-5.834a5.75 5.75 0 015.934-.2C38.833 6 40 7.933 40 10.066v22.6A7.334 7.334 0 0132.667 40H29.9c2.133 0 4.1-1.167 5.1-3.034a5.824 5.824 0 00-.2-5.933l-5.833-9.067-7-10.966z" fill="url(#paint2_linear)"/><path d="M29 21.967l5.834 9.066a5.75 5.75 0 01.2 5.934C34 38.833 32.067 40 29.934 40h-22.6A7.333 7.333 0 010 32.667V29.9C0 32.033 1.167 34 3.033 35a5.824 5.824 0 005.934-.2l9.066-5.833 10.967-7z" fill="url(#paint3_linear)"/><defs><linearGradient id="paint0_linear" x1="-1.726" y1="3.889" x2="13.138" y2="29.901" gradientUnits="userSpaceOnUse"><stop stop-color="#78BEFF"/><stop offset="1" stop-color="#5463F8"/></linearGradient><linearGradient id="paint1_linear" x1="32.588" y1=".084" x2="9.278" y2="13.934" gradientUnits="userSpaceOnUse"><stop stop-color="#ADF7D8"/><stop offset="1" stop-color="#25BAAD"/></linearGradient><linearGradient id="paint2_linear" x1="40.647" y1="32.633" x2="25.107" y2="9.493" gradientUnits="userSpaceOnUse"><stop stop-color="#FFEF9C"/><stop offset="1" stop-color="#F8BD4F"/></linearGradient><linearGradient id="paint3_linear" x1="-.003" y1="30.977" x2="35.737" y2="30.977" gradientUnits="userSpaceOnUse"><stop stop-color="#F79788"/><stop offset="1" stop-color="#EF4A66"/></linearGradient></defs></svg>
          </div>
          <div>
            <span class="p-4 text-2xl font-bold text-black">BimaSalama</span>
          </div>
        </div>
        <div class="mt-8 lg:mt-0 lg:absolute lg:inset-y-0 lg:right-0 lg:w-5/12">
          <img class="h-56 w-full object-cover object-center sm:h-56 rounded-lg shadow-xl lg:inset-0 lg:h-full lg:object-left lg:shadow-none lg:rounded-none" src="/img/insurance.jpg">
          <svg class="hidden lg:block absolute inset-y-0 left-0 w-16 h-full" viewBox="0 0 100 100" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
            <polygon class="text-gray-100" fill="currentColor" points="0,0 0,100 100,0"/>
          </svg>
        </div>
        <h1 class="mt-8 lg:mt-12 text-3xl sm:text-4xl font-bold text-gray-900 leading-tight">
          Insurance done the right way.
          <br class="hidden sm:inline">
          <span class="text-indigo-700">Take advantage of it.</span>
        </h1>
        <p class="mt-4 text-gray-600 text-xl">
          eBima enables you apply for your insurance claim and receive instant feedback of the progress and actions taken. No more paper hastles to get what you deserve.
        </p>
        <div class="mt-6">
        <div class="flex pt-8">
            <div>
                <a href="/register">
                    <button class="shadow-md pl-8 bg-indigo-800 hover:bg-indigo-700 text-white font-bold py-4 px-8">
                    Sign Up
                    </button>
                </a>
            </div>
            <div class="pl-8">
                <a href="/login">
                    <button class="shadow-md pl-8 bg-white hover:bg-gray-300 text-indigo-700 font-bold py-4 px-8">
                    Login
                    </button>
                </a>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>