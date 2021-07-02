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
export default {
    name: "TheSearchBox",
    data () {
        return {
            searchInput: ''
        }
    },
    computed: {
        dataList: {
            get () {
                return this.$store.getters.POKEMONS
            },
            set (value) {
                this.$store.commit('SET_POKEMONS', value)
            }
        },
        filterDataList: {
            get () {
                return this.$store.getters.POKEMONS_WITH_SEARCH_FILTER
            },
            set (value) {
                this.$store.commit('SET_POKEMONS_WITH_SEARCH_FILTER', value)
            }
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
                let searchDataList = this.filterDataList.filter(pokemon => pokemon.name.toLowerCase().includes(this.searchInput.toLowerCase()))
                if (searchDataList.length === 1) {
                    searchDataList = this.dataList.filter(pokemon => pokemon.name.toLowerCase().includes(this.searchInput.toLowerCase()))
                }
                this.$store.commit('SET_POKEMONS_WITH_SEARCH_FILTER', searchDataList)
            } else {
                this.$store.commit('SET_POKEMONS_WITH_SEARCH_FILTER', this.dataList)
            }
        },
    }
}
</script>
