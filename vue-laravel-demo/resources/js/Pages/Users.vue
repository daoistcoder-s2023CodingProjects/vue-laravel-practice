<template>
    <h1 class="text-2xl">User Dashboard</h1>

    <div style="margin-top: 400px">
        <p> The current time is {{ time }}.</p>


        <Link
            href="/users"
            class="text-blue-500 hover:underline"
            preserve-scroll
        >
            Refresh
        </Link>
    </div>
</template>

<script>
import Layout from '../Shared/Layout.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {Layout, Link},

    layout: Layout,

    props: { time: String },
};
</script>
