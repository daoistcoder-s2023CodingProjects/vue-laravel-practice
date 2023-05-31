<template>
    <Head title="Users">
        <meta
            type="description"
            content="User Description"
            head-key="description"
        >
    </Head>
    <div class="flex justify-between mb-6">
        <h1 class="text-3xl">User</h1>

        <input v-model="search" type="text" placeholder="Search..."  class="border px-2 rounded-lg"/>
    </div>


    <ul role="list" class="divide-y divide-gray-400">
        <li  v-for="user in users.data"
            :key="user.id"
            class="flex justify-between gap-x-6 py-5"
        >
            <div class="flex gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ user.name }}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ user.email }}</p>
                </div>
            </div>

            <div class="hidden sm:flex sm:flex-col sm:items-end">
               <Link :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900 hover:underline">
                    Edit
               </Link>
            </div>
        </li>
    </ul>

<!-- Paginator -->
   <Paginator :links="users.links" class="mt-6"/>
</template>

<script setup>
import Paginator from '../../Shared/Paginator.vue';
import { ref, watch } from 'vue';
import {Inertia} from "@inertiajs/inertia";

let props = defineProps({
    users: Object,
    filters: Object,
})

let search = ref(props.filters.search);

watch(search, value => {
    Inertia.get('/users', { search: value }, {
        preserveState: true,
        replace: true
    });
})
</script>
