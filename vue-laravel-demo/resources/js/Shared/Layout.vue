<template>
    <section class="p-6 bg-gray-200">
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
            <div class="flex justify-center items-center">
                <iframe
                    class="mb-6 align-center"
                    width="40%"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    src="https://www.youtube.com/embed/9E6b3swbnWg?start=1"
                 />
            </div>

            <slot />
        </div>
    </section>
</template>

<script>
import Nav from './Nav.vue';

export default {
    components: { Nav },

    computed: {
        name() {
            return this.$page.props.auth.user.name;
        }
    }
};
</script>

