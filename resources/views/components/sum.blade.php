<div
    class="z-20 w-full bg-gray-700 flex items-center border-t justify-center text-3xl font-bold mt-8 gap-2 fixed bottom-0">
    <div class="flex items-center gap-2 justify-center my-2 text-white">
        <p>Summe</p>
        <p x-text="new Intl.NumberFormat('de-DE', {style: 'currency', currency: 'EUR'}).format(drinks.map(drink => drink[1] * drink[2]).reduce((partialSum, a) => partialSum + a, 0)/100)"></p>
        <button @click="drinks.forEach(drink => drink[2] = 0)"
                class="bg-red-600 text-gray-100 rounded py-2 px-2 font-semibold uppercase text-2xl">R
        </button>
    </div>
</div>
