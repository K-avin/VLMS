<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.png') }}">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <footer class="p-4">
        <!-- component -->
        <div class="flex items-center justify-center">

            <card class="flex flex-col bg-white">

                <!-- Logo -->
                <div class="flex justify-center">
                    <img src="https://raw.githubusercontent.com/K-avin/VLMS/50f275b05d87cb3e0d10aac8efef4b90ed4cd4f4/version%202%20red%20back%20logo.svg"
                        class="w-8 h-8" />
                </div>

                <!-- Title -->
                <p class="text-center text-gray-800 text-1md mt-1"> Copyright © 2022 <a class="text-red-600" href="https://www.instagram.com/infocliq/">infocliq</a></p>

            </card>

        </div>
    </footer>
</body>

</html>
