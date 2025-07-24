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
    <body class="font-sans antialiased bg-background dark:bg-background-dark">
        <div class="min-h-screen flex flex-col lg:flex-row">
            <!-- Sidebar (desktop) -->
            <aside class="hidden lg:flex lg:flex-col w-64 bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 min-h-screen shadow-xl">
                @include('layouts.sidebar')
            </aside>
            <!-- Mobile Topbar -->
            <header class="lg:hidden w-full bg-white dark:bg-gray-900 shadow-md sticky top-0 z-30">
                @include('layouts.mobile-topbar')
            </header>
            <!-- Main Content -->
            <div class="flex-1 flex flex-col min-h-screen">
                @include('layouts.navigation')
                @if (isset($header))
                    <div class="bg-white dark:bg-gray-800 shadow">
                        <div class="container mx-auto py-6 px-4">
                            {{ $header }}
                        </div>
                    </div>
                @endif
                <main class="flex-1 container mx-auto py-8 px-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
