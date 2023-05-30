<template>
    <Head>
        <title>User</title>
        <meta
            type="description"
            content="User Description"
            head-key="description"
        >
    </Head>

    <h1 class="text-3xl">User Dashboard</h1>
    <UsersTime />
</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3"
import UsersTime from '../Shared/UsersTime.vue';
</script>
