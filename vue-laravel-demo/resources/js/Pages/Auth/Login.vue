<template>
    <Head title="Login Page"></Head>

    <main class="grid place-items-center min-h-screen bg-green-50">
        <section
            class="bg-white p-8 rounded-xl max-w-md mx-auto border-2 border-gray-200"
        >
            <h1 class="text-3xl font-semibold mb-6">Login</h1>

            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                    >
                        Email
                    </label>

                    <input
                        v-model="form.email"
                        class="border border p-2 w-full bg-gray-50 rounded"
                        type="email"
                        name="email"
                        id="email"
                        required
                    />
                    <div
                        v-if="form.errors.email"
                        v-text="form.errors.email"
                        class="text-red-500 text-xs mt-1"
                    ></div>
                </div>

                <div class="mb-6">
                    <label
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="password"
                    >
                        Password
                    </label>

                    <input
                        v-model="form.password"
                        class="border border p-2 w-full bg-gray-50 rounded"
                        type="password"
                        name="password"
                        id="password"
                        required
                    />
                    <div
                        v-if="form.errors.password"
                        v-text="form.errors.password"
                        class="text-red-500 text-xs mt-1"
                    ></div>
                </div>

                <div class="mb-6 flex justify-center">
                    <p></p>
                    <button
                        type="submit"
                        class="bg-green-400 text-white rounded py-1 px-4 hover:bg-green-100 hover:text-green-600"
                        :disabled="form.processing"
                    >
                        Log In
                    </button>
                </div>
            </form>
        </section>
    </main>
</template>

<script>
export default {
    layout: null,
};
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

let form = useForm({
    email: "",
    password: "",
});

let submit = () => {
    form.post("/login");
};
</script>
