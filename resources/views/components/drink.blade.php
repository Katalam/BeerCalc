<div @click="drink[2] += 1"
    class="p-6 bg-gray-500 rounded-lg shadow-2xl shadow-gray-500/20 flex focus:outline focus:outline-2 focus:outline-red-500">
    <div class="w-full">
        <h2 class="text-xl font-semibold text-gray-100 dark:text-white text-center">{{ $title }}</h2>

        <p class="mt-4 text-gray-200 text-sm leading-relaxed">
            {{ $slot }}
        </p>
    </div>
</div>
