<template>
    <Link
        class="text-black-500"
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

