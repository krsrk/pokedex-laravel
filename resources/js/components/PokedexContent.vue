<template>
    <div>
        <the-search-box></the-search-box>

        <div class="grid grid-cols-3 gap-4">
            <the-item-data v-for="item in items" :data-item="item" :key="item.code" />
        </div>
    </div>
</template>

<script>
import store from "../store/store"
import TheItemData from "./TheItemData";
import TheSearchBox from "./TheSearchBox";

export default {
    name: "PokedexContent",
    components: {
        'the-item-data': TheItemData,
        'the-search-box': TheSearchBox,
    },
    created() {
        this.$store.dispatch('getPokemonsData')
    },
    store,
    computed: {
        items: {
            get () {
                return this.$store.getters.POKEMONS_WITH_SEARCH_FILTER
            },
            set (value) {
                this.$store.commit('SET_POKEMONS_WITH_SEARCH_FILTER', value)
            }
        },
    },
}
</script>
