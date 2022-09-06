import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import store from './store/store';

import PokedexNav from "./components/PokedexNav.vue";
import PokedexContent from "./components/PokedexContent.vue";
import PokedexFooter from "./components/PokedexFooter.vue";

createApp({
    components: {
        'pokedex-nav': PokedexNav,
        'pokedex-content': PokedexContent,
        'pokedex-footer': PokedexFooter,
    }
}).use(store).mount('#app')
