<template>
    <!--- The Footer -->
    <footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">
        <div class="container mx-auto px-6">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm text-blue-700 font-bold mb-2">
                        © {{ currentYear }} Pokedex Project by Chris López.
                        <span class="tracking-wider text-white bg-blue-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold">
                            Laravel {{ laravelVersion }}
                        </span>

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
    props: ['laravelVersion'],
    setup(props) {
        const currentDate = new Date();
        let currentYear = currentDate.getFullYear()
        let laravelVersion = props.laravelVersion

        return {
            currentYear,
            laravelVersion
        }
    },
});
</script>
