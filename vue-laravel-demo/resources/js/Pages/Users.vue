<template>
    <Head>
        <title>My app - User</title>
    </Head>

    <h1 class="text-3xl">User Dashboard</h1>
    <UsersTime />
</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3"
import UsersTime from '../Shared/UsersTime.vue';
</script>
