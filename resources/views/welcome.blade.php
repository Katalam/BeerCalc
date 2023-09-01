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
<body class="antialiased" x-data="{
        drinks: [
            ['Bier', 300, 0],
            ['Berliner', 450, 0],
            ['Saft', 300, 0],
            ['Soft', 350, 0],
            ['Selter', 200, 0],
            ['Bowle', 500, 0],
            ['Klopfer', 250, 0],
            ['Kräuter', 250, 0],
            ['Cola-Mix', 550, 0],
            ['Vodka-E', 550, 0],
            ['Wein/Sekt', 450, 0],
            ['Pfand', -100, 0],
        ]
    }">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <img class="w-20" src="{{ Vite::asset('resources/images/patch.png') }}" alt="">
        </div>

        <div class="mt-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-2">
                <template x-for="drink in drinks" :key="drink[0]">
                    <x-drink>
                        <x-slot name="title">
                            <span x-text="drink[0]"/>
                        </x-slot>
                        <div class="w-full px-4 p-2 text-center font-bold text-3xl mb-4" x-text="drink[2]"></div>
                        <div class="flex items-center justify-between gap-2">
                            <button @click="drink[2] += 1"
                                    class="bg-gray-700 text-white rounded p-2 font-bold uppercase text-3xl">+
                            </button>
                            <button @click="drink[2] = Math.max(drink[2] - 1, 0)"
                                    class="bg-gray-700 text-white rounded px-3 py-2 font-bold uppercase text-3xl">-
                            </button>
                        </div>
                    </x-drink>
                </template>
            </div>

            <div class="w-full flex items-center justify-center text-3xl font-bold mt-8 gap-2">
                <div class="flex flex-col items-center justify-center">
                    <p>Summe</p>
                    <p x-text="new Intl.NumberFormat('de-DE', {style: 'currency', currency: 'EUR'}).format(drinks.map(drink => drink[1] * drink[2]).reduce((partialSum, a) => partialSum + a, 0)/100)"></p>
                </div>
                <button @click="drinks.forEach(drink => drink[2] = 0)"
                        class="bg-gray-700 text-white rounded px-3 py-2 font-bold uppercase text-3xl">R
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
