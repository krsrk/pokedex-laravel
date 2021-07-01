<template>
    <div class="max-w-xs rounded overflow-hidden shadow-lg my-5">
        <img loading="lazy" class="w-full" :src="dataItem.image_url" :alt="dataItem.name">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ dataItem.code }} - {{ dataItem.name }}</div>
            <p class="text-grey-darker text-base">
                <b>Height: </b> {{ dataItem.height }} <br>
                <b>Weight: </b> {{ dataItem.weight }} <br>
                <b>Ability: </b> {{ dataItem.ability }}
            </p>
        </div>
        <div class="px-6 py-4">
            <a :href="dataItem.more_info_url" target="_blank"
               class="tracking-wider text-white bg-red-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold"
               :title="dataItem.name">
                <i class="fas fa-info-circle" aria-hidden="true"></i> More Info
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "TheItemData",
    props: {
        dataItem: {
            type: Object,
        },
    }
}
</script>
