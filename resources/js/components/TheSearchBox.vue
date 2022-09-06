<template>
    <div class="m-5">
        <input
            v-model="searchInput"
            type="search"
            name="query"
            placeholder="Find your Pokemon ..."
            required="required"
            class="p-4 text-gray-700 w-full bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-gray-400">
    </div>
</template>

<script>
import { defineComponent, computed, ref } from 'vue';
import { useStore } from 'vuex';

export default defineComponent({
    name: "TheSearchBox",
    setup() {
        //Store
        const store = useStore();

        //Data
        let searchInput = ref('');

        //Computed
        let dataList = computed(function () {
            return store.state.pokemons;
        });

        let filterDataList = computed(function () {
            return store.state.pokemonsWithSearchFilter;
        })

        return {
            searchInput,
            dataList,
            filterDataList,
        }
    },
    watch: {
        searchInput: {
            handler: function (value) {
                this.filterListByInputSearch()
            },
        },
    },
    methods: {
        filterListByInputSearch() {
            if (this.searchInput !== '') {
                let searchDataList = this.filterDataList.filter(pokemon => pokemon.name.toLowerCase()
                    .includes(this.searchInput.toLowerCase()))
                if (searchDataList.length === 1) {
                    searchDataList = this.dataList.filter(pokemon => pokemon.name.toLowerCase()
                        .includes(this.searchInput.toLowerCase()))
                }
                this.$store.commit('SET_POKEMONS_WITH_SEARCH_FILTER', searchDataList)
            } else {
                this.$store.commit('SET_POKEMONS_WITH_SEARCH_FILTER', this.dataList)
            }
        },
    }
})
</script>
