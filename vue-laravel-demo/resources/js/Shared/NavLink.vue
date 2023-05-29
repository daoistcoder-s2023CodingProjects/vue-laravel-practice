<template>
    <Link
        class="text-black-500"
        :class="{'font-bold': active }"
    >
        <slot />
    </Link>
</template>

<script>
    export default {
        props: {
            active: Boolean
        },
    };
</script>

