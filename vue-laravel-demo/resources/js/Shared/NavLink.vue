<template>
    <Link
        class="text-black"
        :class="{'font-bold': active }"
    >
        <slot />
    </Link>
</template>

<script setup>
defineProps({
    active: Boolean
})
</script>

