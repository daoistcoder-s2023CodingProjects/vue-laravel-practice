<template>
    <Head title="Users">
        <meta
            type="description"
            content="User Description"
            head-key="description"
        >
    </Head>

    <h1 class="text-3xl">User</h1>

    <ul>
        <li
            v-for="user in users"
            :key="user.id"
            v-text="user.name"
        />
    </ul>

</template>

<script setup>
defineProps({ users: Array })
</script>
