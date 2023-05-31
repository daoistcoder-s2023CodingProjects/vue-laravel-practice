<template>
    <nav>
        <ul class="flex space-x-6">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'" >
                    Home
                </NavLink>
            </li>

            <li>
                <NavLink href="/users" :active="$page.url.startsWith('/users')" >
                    Users
                </NavLink>
            </li>

            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'" >
                    Settings
                </NavLink>
            </li>

            <li
                class="
                    font-semibold
                    text-blue-500
                    text-sm ml-4
                    border-2
                    border-gray-300
                    bg-blue-100
                    px-2
                    py-1
                    rounded-lg
                    hover:bg-red-300"
            >
                <NavLink href="/logout" method="post">
                    Log Out
                </NavLink>
            </li>

        </ul>
    </nav>
</template>

<script>
import NavLink from './NavLink.vue';

    export default {
        components: { NavLink },
    }
</script>

