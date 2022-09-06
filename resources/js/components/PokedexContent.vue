<template>
    <div>
        <the-search-box></the-search-box>

        <div class="grid grid-cols-3 gap-4">
            <the-item-data v-for="item in items" :data-item="item" :key="item.code" />
        </div>
    </div>
</template>

<script>
import { defineComponent, computed, onMounted } from 'vue';
import { useStore } from 'vuex';

import TheItemData from "./TheItemData";
import TheSearchBox from "./TheSearchBox";

export default defineComponent({
    name: "PokedexContent",
    components: {
        'the-item-data': TheItemData,
        'the-search-box': TheSearchBox,
    },
    setup() {
        const store = useStore();

        onMounted(() => {
            store.dispatch('getPokemonsData');
        })

        let items = computed(function () {
            return store.state.pokemonsWithSearchFilter;
        });

        return {
            store,
            items,
        }
    }
})
</script>
