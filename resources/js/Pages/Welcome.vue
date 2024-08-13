<script setup lang="ts">
import Layout from '../Layouts/GuestLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <Layout>
    <div class="column items-center">
      <h1>Welcome</h1>
      <p class="text-subtitle1">Please sign in to continue</p>
      <Link href="/login">
        <q-btn push rounded color="primary" label="Sign in" />
      </Link>
    </div>
  </Layout>
</template>
