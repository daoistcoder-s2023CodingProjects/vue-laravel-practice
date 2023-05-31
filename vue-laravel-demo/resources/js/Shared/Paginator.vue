<template>
     <div>
        <Component
            :is="link.url ? 'Link' : 'span'"
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            preserve-scroll

            class="px-1"
            :class="link.url? '' : 'text-gray-500'"
        />
    </div>
</template>

<script>
export default {
    props: {
        links: Array
    }
}
</script>

