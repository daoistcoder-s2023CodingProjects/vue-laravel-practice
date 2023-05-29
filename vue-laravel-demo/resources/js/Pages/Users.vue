<template>
    <h1 class="text-2xl">User Dashboard</h1>
    <UsersTime />
</template>

<script>
import Layout from '../Shared/Layout.vue';
import UsersTime from '../Shared/UsersTime.vue';

export default {
    components: {Layout, UsersTime},

    layout: Layout,
};
</script>
