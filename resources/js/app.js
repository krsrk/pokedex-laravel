require('./bootstrap');

window.Vue = require('vue').default;
window.Vuex = require('vuex');

const PokedexContent = () => import("./components/PokedexContent")
const PokedexNav = () => import("./components/PokedexNav")
const PokedexFooter = () => import("./components/PokedexFooter")

const app = new Vue({
    el: '#app',
    components: {
        'pokedex-content': PokedexContent,
        'pokedex-nav': PokedexNav,
        'pokedex-footer': PokedexFooter,
    }
});
