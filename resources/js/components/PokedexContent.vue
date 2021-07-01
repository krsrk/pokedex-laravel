<template>
    <div class="grid grid-cols-3 gap-4">
        <the-item-data v-for="item in items" :data-item="item" :key="item.code" />
    </div>
</template>

<script>
import TheItemData from "./TheItemData";

export default {
    name: "PokedexContent",
    components: {
        'the-item-data': TheItemData,
    },
    created() {
        this.getPokemonsData()
    },
    data () {
        return {
            items: [],
        }
    },
    methods: {
        async getPokemonsData () {
            let { data } = await axios.get('/pokemons')
            this.items = data
        }
    }
}
</script>
