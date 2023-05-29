<template>
    <Layout>
        <h1 class="text-4xl font-bold">User Dashboard</h1>
    </Layout>

    <div style="margin-top: 400px">
        <p> The current time is {{ time }}.</p>


        <Link
            href="/users"
            class="text-blue-500"
            preserve-scroll
        >
            Refresh
        </Link>
    </div>

</template>

<script>
import Layout from '../Shared/Layout.vue';
import Nav from '../Shared/Nav.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: { Layout, Link },
    props: { time: String }
}
</script>

<style lang="scss" scoped>

</style>
