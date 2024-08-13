<script setup>
import Layout from '../../Layouts/AuthenticatedLayout.vue'

defineProps({ product: Object })
</script>

<template>
  <Layout>
    <p>{{ product.name }}</p>
  </Layout>
</template>
