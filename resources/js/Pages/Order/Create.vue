<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'
import Layout from '../../Layouts/AuthenticatedLayout.vue'

const form = useForm({
  name: '',
  country: '',
  postalCode: null,
  city: '',
  street: ''
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
const streetRules = [
  (value: string | undefined) => {
    if (value) return true

    return 'Street is required.'
  },
  (value: string | undefined) => {
    if (value && value?.length <= 100) return true

    return 'Street must be less than 100 characters.'
  }
]
const postalCodeRules = [
  (value: string | undefined) => {
    if (value) return true

    return 'Postal code is required.'
  },
  (value: string | undefined) => {
    if (value?.length === 5) return true

    return 'Postal code must be 5 characters'
  }
]
const cityRules = [
  (value: string | undefined) => {
    if (value) return true

    return 'City is required.'
  },
  (value: string | undefined) => {
    if (value && value?.length <= 20) return true

    return 'City must be less than 20 characters.'
  }
]
const countryRules = [
  (value: string | undefined) => {
    if (value) return true

    return 'City is required.'
  },
  (value: string | undefined) => {
    if (value && value?.length <= 20) return true

    return 'City must be less than 20 characters.'
  }
]
</script>

<template>
  <Layout>
    <q-form @submit="form.post('/shop/create')" class="q-gutter-md">
      <q-input
        filled
        v-model="form.name"
        label="Shop name*"
        lazy-rules
        :rules="nameRules"
      />
      <q-input
        filled
        v-model="form.street"
        label="Street*"
        lazy-rules
        :rules="streetRules"
      />
      <q-input
        filled
        v-model="form.city"
        label="City*"
        lazy-rules
        :rules="cityRules"
      />
      <q-input
        filled
        v-model="form.country"
        label="Country*"
        lazy-rules
        :rules="countryRules"
      />
      <q-input
        filled
        v-model="form.postalCode"
        label="Postal code*"
        lazy-rules
        :rules="postalCodeRules"
      />

      <div>
        <q-btn label="Submit" type="submit" color="primary" />
      </div>
    </q-form>
  </Layout>
</template>
