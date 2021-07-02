export default {
    getPokemonsData: async (context, payload) => {
        try {
            let { data } = await axios.get('/pokemons')
            context.commit('SET_POKEMONS', data)
            context.commit('SET_POKEMONS_WITH_SEARCH_FILTER', data)
        } catch (e) {
            console.log(e)
        }
    },
}
