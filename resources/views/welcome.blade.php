<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BeerCalc</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>
<body class="antialiased disable-dbl-tap-zoom">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-700 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8 z-10">
        <div class="mt-8">
            <h1 class="text-center mx-auto text-3xl text-gray-100 mb-4">Rechner</h1>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 text-gray-100">
                <a href="{{ route('drinks') }}" class="px-4 py-2 bg-gray-600 rounded-lg text-center">Getränke</a>
                <a href="{{ route('snacks') }}" class="px-4 py-2 bg-gray-600 rounded-lg text-center">Essen</a>
                <a href="{{ route('cakes') }}" class="px-4 py-2 bg-gray-600 rounded-lg text-center">Kuchen</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
