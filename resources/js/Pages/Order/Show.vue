<script setup>
import Layout from '../../Layouts/AuthenticatedLayout.vue'

defineProps({ shop: Object })
</script>

<template>
  <Layout>
    <p>{{ shop.name }}</p>
  </Layout>
</template>
