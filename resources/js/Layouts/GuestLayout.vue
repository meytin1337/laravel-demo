<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <q-layout view="hHh lpR fFf">
    <q-header elevated class="bg-primary text-white">
      <q-toolbar>
        <q-toolbar-title> Laravel Demo </q-toolbar-title>
        <Link href="/login">
          <q-btn flat round dense icon="login" class="q-mr-xs" />
        </Link>
        <Link href="/register">
          Register
        </Link>
      </q-toolbar>
    </q-header>

    <q-page-container>
      <slot />
    </q-page-container>
  </q-layout>
</template>
