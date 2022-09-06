<template>
    <!--- The Footer -->
    <footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">
        <div class="container mx-auto px-6">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm text-blue-700 font-bold mb-2">
                        © {{ currentYear }} Pokedex Project by Chris López.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
import { defineComponent } from 'vue/dist/vue.esm-bundler';

export default defineComponent({
    name: "PokedexFooter",
    setup() {
        const currentDate = new Date();
        let currentYear = currentDate.getFullYear()

        return {
            currentYear
        }
    },
});
</script>
