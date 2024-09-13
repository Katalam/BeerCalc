<x-layout>
    <body class="antialiased disable-dbl-tap-zoom">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-700 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8 z-10">
            <div class="mt-8">
                <h1 class="text-center mx-auto text-3xl text-gray-100 mb-4">Rechner 2024</h1>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 text-gray-100">
                    <a href="{{ route('drinks') }}" class="px-4 py-2 bg-gray-600 rounded-lg text-center">Getränke</a>
                    <a href="{{ route('snacks') }}" class="px-4 py-2 bg-gray-600 rounded-lg text-center">Essen</a>
                    <a href="{{ route('cakes') }}" class="px-4 py-2 bg-gray-600 rounded-lg text-center">Kuchen</a>
                </div>
            </div>
        </div>
    </div>
    </body>
</x-layout>
