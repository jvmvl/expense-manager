<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import Sidebar from '@/Components/Sidebar.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="flex">
      <Sidebar /> <!-- Include Sidebar here -->
      <main class="flex-1">
        <slot /> <!-- Render the main content -->
      </main>
    </div>
  </template>