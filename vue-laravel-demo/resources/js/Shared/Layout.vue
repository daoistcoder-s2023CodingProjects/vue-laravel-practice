<template>
    <Head>
        <title>My App</title>
        <meta
            type="description"
            content="Information about my app"
            head-key="description"
        >
    </Head>
    <section class="p-6 bg-green-100">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">
                    My App
                </h1>

                <p class="text-sm ml-4">Welcome back, <strong>{{ name }}!</strong></p>
            </div>

            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import LayoutMusic from './LayoutMusic.vue';
import Nav from './Nav.vue';

export default {
    components: { Nav, LayoutMusic, Head },

    computed: {
        name() {
            return this.$page.props.auth.user.name;
        }
    }
};
</script>

