<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { onMounted } from 'vue';
import {
  Chart,
  PieController,
  ArcElement,
  Tooltip,
  Legend,
} from 'chart.js';

defineProps({
    auth: {
        type: Object,
        required: true,
    }
});

// Register required components
Chart.register(PieController, ArcElement, Tooltip, Legend);

onMounted(() => {
  const ctx = document.getElementById('expensesChart').getContext('2d');
  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Rent', 'Food', 'Transport', 'Utilities'],
      datasets: [
        {
          label: 'Expenses',
          data: [1200, 800, 300, 100],
          backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
        },
      ],
    },
  });
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout :auth="auth">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                        <div class="bg-blue-500 text-white p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold">Total Expenses</h3>
                            <p class="text-2xl">$2,345</p>
                        </div>
                        <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold">Remaining Budget</h3>
                            <p class="text-2xl">$1,200</p>
                        </div>
                        <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold">Savings</h3>
                            <p class="text-2xl">$4,500</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h2 class="text-lg font-bold mb-4">Recent Transactions</h2>
                        <table class="w-full table-auto border-collapse border border-gray-300">
                            <thead>
                            <tr class="bg-gray-100">
                                <th class="border px-4 py-2">Date</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="border px-4 py-2">2025-01-14</td>
                                <td class="border px-4 py-2">Groceries</td>
                                <td class="border px-4 py-2">$150</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">2025-01-13</td>
                                <td class="border px-4 py-2">Rent</td>
                                <td class="border px-4 py-2">$1,200</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">2025-01-12</td>
                                <td class="border px-4 py-2">Utilities</td>
                                <td class="border px-4 py-2">$100</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        <PrimaryButton>
                            View All Expenses
                        </PrimaryButton>
                    </div>
 
                    <div class="mt-8">
                        <h2 class="text-lg font-bold mb-4">Expense Categories</h2>
                        <div class="chart-container" style="max-width: 400px; margin: auto;">
                            <canvas id="expensesChart" width="400" height="400"></canvas>
                        </div>
                    </div>

                    <!--PrimaryButton v-if="['Admin', 'Editor'].includes($page.props.auth.user.role.name)" class="m-10">
                        Edit
                    </PrimaryButton--> 
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
