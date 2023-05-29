<template>
    <Layout :name="name">
        <h1 class="text-2xl">Home Dashboard</h1>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout.vue';
import Nav from '../Shared/Nav.vue';

    export default {
        components: { Nav, Layout },

        props: { name: String },
    }
</script>

<style lang="scss" scoped>

</style>
