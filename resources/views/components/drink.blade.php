<div
    class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex focus:outline focus:outline-2 focus:outline-red-500">
    <div class="w-full">
        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">{{ $title }}</h2>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
            {{ $slot }}
        </p>
    </div>
</div>
