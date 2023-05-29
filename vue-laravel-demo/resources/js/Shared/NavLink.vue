<template>
    <Link
        class="text-black-500"
        :class="{'font-bold': active }"
    >
        <slot />
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    active: Boolean
})
</script>

