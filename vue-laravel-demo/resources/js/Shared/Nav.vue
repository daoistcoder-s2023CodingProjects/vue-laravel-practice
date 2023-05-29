<template>
    <nav class="mt-6">
        <ul class="list-none ">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'" >Home</NavLink>
            </li>

            <li>
                <NavLink href="/users?foo=bar&baz=buzz" :active="$page.component === 'Users'" >Users</NavLink>
            </li>

            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'" >Settings</NavLink>
            </li>

        </ul>
    </nav>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
import NavLink from './NavLink.vue';

    export default {
        components: { NavLink },
    }
</script>

<style lang="scss" scoped>

</style>
