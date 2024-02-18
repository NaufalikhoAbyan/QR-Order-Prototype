<template>
    <!-- Navbar -->
    <div class="bg-gray-100 border-b-2 px-36 py-5 flex justify-between items-center">
        <div class="text-3xl font-bold">QR Prototype</div>
        <div class="flex gap-4">
            <div><Link href="/">Home</Link></div>
            <div><Link href="/about">About</Link></div>
        </div>
    </div>
    <div class="px-36">
        <slot></slot>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
