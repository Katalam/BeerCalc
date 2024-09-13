<x-layout>
    <body class="antialiased disable-dbl-tap-zoom" x-data="{
        drinks: [
            ['Bier (Pfand)', 400, 0],
            ['Berliner (Pfand)', 450, 0],
            ['Soft (Pfand)', 350, 0],
            ['Saft (Pfand)', 300, 0],
            ['Selter (Pfand)', 200, 0],
            ['Wein/Sekt (Pfand)', 500, 0],
            ['Bowle (Pfand)', 500, 0],
            ['Klopfer', 250, 0],
            ['Mische (Pfand)', 550, 0],
            ['Los', 100, 0],
            ['Pfandrückgabe', -100, 0],
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
                                    class="bg-red-600 text-white rounded px-3 py-2 font-bold uppercase text-3xl">R
                            </button>
                        </div>
                    </x-drink>
                </template>
            </div>
        </div>
        <x-sum/>
    </div>
    </body>
</x-layout>
