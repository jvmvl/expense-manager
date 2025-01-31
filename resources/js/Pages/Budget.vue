<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({
    auth: {
        type: Object,
        required: true,
    }
});
</script>

<template>
    <Head title="Budget" />

    <AuthenticatedLayout :auth="auth">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Budget
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    
                    <div class="m-10 text-gray-900">
                        Budget Page
                    </div>
                    
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
