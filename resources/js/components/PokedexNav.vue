<template>
    <div class="relative bg-red-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center border-b-1 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="lg:w-0 lg:flex-1 rounded-full text-white shadow-solid">
                    <a href="#" class="flex">
                        <img class="h-12 w-12" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Pok%C3%A9_Ball_icon.svg" alt="Workflow">
                    </a>
                </div>

                <div class="md:flex items-center justify-center space-x-8 md:flex-1 lg:w-0">
                    <h1 class="text-white text-3xl">The Pokedex</h1>
                </div>

                <div class="md:flex items-center justify-center space-x-8 md:flex-1 lg:w-0">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
    name: "PokedexNav"
});
</script>
