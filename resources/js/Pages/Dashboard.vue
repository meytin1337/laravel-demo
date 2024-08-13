<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { defineProps } from 'vue'
import { Shop, Product, Order } from '../types'
import { Link } from '@inertiajs/vue3'
defineProps<{ orders: Order[]; shops: Shop[]; products: Product[] }>()
const shopColumns = [
  {
    name: 'id',
    label: 'Id',
    field: 'id'
  },
  {
    name: 'name',
    label: 'Name',
    field: 'name'
  },
  {
    name: 'street',
    label: 'Street',
    field: 'street'
  },
  {
    name: 'country',
    label: 'Country',
    field: 'country'
  },
  {
    name: 'city',
    label: 'City',
    field: 'city'
  },
  {
    name: 'postalCode',
    label: 'Postal code',
    field: 'postal_code'
  },
  {
    name: 'show',
    label: ''
  }
]
</script>

<template>
  <AuthenticatedLayout>
    <div class="q-pa-md">
      <q-table
        title="Shops"
        :rows="shops"
        :columns="shopColumns"
        row-key="name"
      >
        <template v-slot:body-cell-show="props">
          <q-td :props="props">
            <Link :href="'/shop/show/' + props.row.id"
              ><q-btn flat icon="login" />
            </Link>
          </q-td>
        </template>
      </q-table>
    </div>
  </AuthenticatedLayout>
</template>
