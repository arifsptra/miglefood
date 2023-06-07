<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="w-full h-screen sm:h-full sm:max-w-md p-[20px] sm:px-[80px] sm:py-[60px] bg-white bg-[rgba(255, 255, 255, 0.8)] overflow-hidden sm:rounded-[20px]">
                <div class="flex flex-col sm:justify-center items-center">
                    <a href="/">
                        <x-application-logo />
                    </a>
                    <p class="text-[24px] font-semibold mt-[20px]">Welcome!</p>
                    <p class="text-[#727678] text-center mb-[30px] text-[14px]">Enter your Phone Number, and your Password and then click Log In button to continue to the application</p>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
