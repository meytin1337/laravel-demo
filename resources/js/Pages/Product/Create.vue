<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'
import Layout from '../../Layouts/AuthenticatedLayout.vue'
import { defineProps } from 'vue'
import { Shop } from '../../types'

defineProps<{ shops: Shop[] }>()

const form = useForm({
  name: '',
  price: null,
  shop: ''
})
const nameRules = [
  (value: string | undefined) => {
    if (value) return true

    return 'Name is required.'
  },
  (value: string | undefined) => {
    if (value && value?.length <= 30) return true

    return 'Name must be less than 30 characters.'
  }
]
const priceRules = [
  (value: number | undefined) => {
    if (value) return true

    return 'Price is required.'
  },
  (value: number | undefined) => {
    if (value && value > 0 && value < 500) return true

    return 'Price must be between 0$ and 500$'
  }
]
</script>

<template>
  <Layout>
    <q-form @submit="form.post('/product/create')" class="q-gutter-md">
      <q-input
        filled
        v-model="form.name"
        label="Product name*"
        lazy-rules
        :rules="nameRules"
      />
      <q-input
        filled
        type="number"
        v-model="form.price"
        label="Price*"
        lazy-rules
        :rules="priceRules"
      />
      <q-select
        v-model="form.shop"
        :options="shops"
        option-value="id"
        option-label="name"
        label="Shop"
      />

      <div>
        <q-btn label="Submit" type="submit" color="primary" />
      </div>
    </q-form>
  </Layout>
</template>
