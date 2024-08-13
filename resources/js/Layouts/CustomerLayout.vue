<script setup lang="ts">
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <q-layout view="hHh lpR fFf">
    <q-header elevated class="bg-primary text-white">
      <q-toolbar>
        <q-btn flat round dense icon="menu">
          <q-menu>
            <q-list style="min-width: 100px">
              <q-item clickable v-close-popup>
                <Link href="/shop/create"
                  ><q-item-section>View Orders</q-item-section></Link
                >
              </q-item>
              <q-item clickable v-close-popup>
                <Link href="/product/create"
                  ><q-item-section>User Settings</q-item-section></Link
                >
              </q-item>
              <q-separator />
            </q-list>
          </q-menu>
        </q-btn>
        <q-toolbar-title>
          <Link href="/dashboard"> Laravel Demo </Link>
        </q-toolbar-title>
        <Link href="/logout" method="post">
          <q-btn flat round dense icon="logout" class="q-mr-xs" />
        </Link>
      </q-toolbar>
    </q-header>

    <q-page-container>
      <slot />
    </q-page-container>
  </q-layout>
</template>
