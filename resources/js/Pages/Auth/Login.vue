<template>
    <div class="px-96 py-6">
        <box>
            <div class="bg-gray-100 text-4xl font-bold text-center py-4 border-b-2">Login</div>
            <div class="p-4">
                <form class="flex flex-col space-y-4" @submit.prevent="form.post('/login')">
                    <div class="flex flex-col">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" class="p-2 border-2 border-gray-300 rounded" v-model="form.email"/>
                    </div>
                    <div class="flex flex-col">
                        <label>Password</label>
                        <input type="password" placeholder="Password" name="password" class="p-2 border-2 border-gray-300 rounded" v-model="form.password"/>
                    </div>
                    <button class="bg-blue-500 text-white p-2 rounded-md">Login</button>
                </form>
            </div>
        </box>
    </div>
</template>

<script setup>
import Box from "@/Components/Box.vue";
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email: null,
    password: null,
    remember: false,
});
</script>
