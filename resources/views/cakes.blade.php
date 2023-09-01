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
<body class="antialiased disable-dbl-tap-zoom" x-data="{
        drinks: [
            ['Kuchen', 150, 0],
            ['Kaffee', 150, 0],
            ['Pfand', -100, 0],
        ]
    }">
<div
    class="relative sm:flex sm:justify-center sm:items-start min-h-screen bg-dots-darker bg-center bg-gray-700 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-3 z-10">
        <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-2 mb-20">
            <template x-for="drink in drinks" :key="drink[0]">
                <x-drink>
                    <x-slot name="title">
                        <span x-text="drink[0]"/>
                    </x-slot>
                    <div class="flex items-center justify-between gap-2">
                        <div class="w-full px-4 p-2 text-center font-bold text-3xl" x-text="drink[2]"></div>
                        <button @click.stop="drink[2] = Math.max(drink[2] - 1, 0)"
                                class="bg-gray-700 text-white rounded px-3 py-2 font-bold uppercase text-3xl">R
                        </button>
                    </div>
                </x-drink>
            </template>
        </div>
    </div>
    <div
        class="z-20 w-full bg-gray-700 flex items-center border-t justify-center text-3xl font-bold mt-8 gap-2 absolute bottom-0">
        <div class="flex items-center gap-2 justify-center my-2 text-white">
            <p>Summe</p>
            <p x-text="new Intl.NumberFormat('de-DE', {style: 'currency', currency: 'EUR'}).format(drinks.map(drink => drink[1] * drink[2]).reduce((partialSum, a) => partialSum + a, 0)/100)"></p>
            <button @click="drinks.forEach(drink => drink[2] = 0)"
                    class="bg-gray-100 text-gray-800 rounded py-2 px-2 font-semibold uppercase text-2xl">R
            </button>
        </div>
    </div>
</div>
</body>
</html>
