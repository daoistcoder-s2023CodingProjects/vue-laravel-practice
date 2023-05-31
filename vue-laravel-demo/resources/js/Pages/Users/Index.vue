<template>
    <Head title="Users">
        <meta
            type="description"
            content="User Description"
            head-key="description"
        />
    </Head>
    <div class="flex justify-between mb-6">
        <div class="flex items-center">
            <h1 class="text-3xl font-semibold">User</h1>

            <Link
                href="/users/create"
                class="font-semibold text-blue-500 text-sm ml-4 mt-2 border-2 border-gray-300 bg-blue-100 px-2 rounded-lg hover:bg-blue-200 hover:text-blue-800"
            >
                New User
            </Link>
        </div>
        <input
            v-model="search"
            type="text"
            placeholder="Search..."
            class="border-2 border-gray-400 px-2 mt-3 rounded-lg"
        />
    </div>

    <ul role="list" class="divide-y divide-gray-400">
        <li
            v-for="user in users.data"
            :key="user.id"
            class="flex justify-between gap-x-6 py-5"
        >
            <div class="flex gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">
                        {{ user.name }}
                    </p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                        {{ user.email }}
                    </p>
                </div>
            </div>

            <div class="hidden sm:flex sm:flex-col sm:items-end">
                <Link
                    :href="`/users/${user.id}/edit`"
                    class="text-indigo-600 hover:text-indigo-900 hover:underline"
                >
                    Edit
                </Link>
            </div>
        </li>
    </ul>

    <!-- Paginator -->
    <Paginator :links="users.links" class="mt-6" />
</template>

<script setup>
import Paginator from "../../Shared/Paginator.vue";
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";

let props = defineProps({
    users: Object,
    filters: Object,
});

let search = ref(props.filters.search);

watch(search, (value) => {
    Inertia.get(
        "/users",
        { search: value },
        {
            preserveState: true,
            replace: true,
        }
    );
});
</script>
