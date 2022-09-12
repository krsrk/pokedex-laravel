<div>
    <div class="m-5">
        <input
            wire:model.debounce.250ms="search"
            type="search"
            name="query"
            placeholder="Find your Pokemon ..."
            required="required"
            class="p-4 text-gray-700 w-full bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-gray-400">
    </div>
    <div class="m-5 grid grid-cols-3 gap-4">
        @foreach ($pokemons as $pokemon)
            <livewire:the-items-data :pokemon="$pokemon" :key="$pokemon->id"/>
        @endforeach
    </div>
</div>
