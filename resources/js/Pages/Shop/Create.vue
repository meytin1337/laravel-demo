<script setup lang="ts">
//import { Head } from '@inertiajs/vue3';
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'

const valid = ref(false)
const form = useForm({
    name: '',
    country: '',
    postalCode: null,
    city: '',
    street: '',
})
const nameRules = [
    (value: string | undefined) => {
        if (value) return true

        return 'Name is required.'
    },
    (value: string | undefined) => {
        if (value && value?.length <= 30) return true

        return 'Name must be less than 30 characters.'
    },
]
const streetRules = [
    (value: string | undefined) => {
        if (value) return true

        return 'Street is required.'
    },
    (value: string | undefined) => {
        if (value && value?.length <= 100) return true

        return 'Street must be less than 100 characters.'
    },
]
const postalCodeRules = [
    (value: string | undefined) => {
        if (value) return true

        return 'Postal code is required.'
    },
    (value: string | undefined) => {
        if (typeof value === 'number') return true

        return 'Postal code must be a number'
    },
    (value: string | undefined) => {
        if (value?.length === 5) return true

        return 'Postal code must be 5 characters'
    },
]
const cityRules = [
    (value: string | undefined) => {
        if (value) return true

        return 'City is required.'
    },
    (value: string | undefined) => {
        if (value && value?.length <= 20) return true

        return 'City must be less than 20 characters.'
    },
]
const countryRules = [
    (value: string | undefined) => {
        if (value) return true

        return 'City is required.'
    },
    (value: string | undefined) => {
        if (value && value?.length <= 20) return true

        return 'City must be less than 20 characters.'
    },
]
</script>

<template>
    <v-form v-model="valid" fast-fail @submit.prevent="form.post('/shop/create')">
        <v-container>
            <v-row justify="center">
                <h2 class="text-h2 p-5">
                    Create a new shop
                </h2>
            </v-row>
            <v-row justify="center">
                <v-col cols="12" md="4">
                    <v-text-field v-model="form.name" :rules="nameRules" label="Shop name" hide-details required />
                </v-col>
            </v-row>
            <v-row>
                <h3 class="text-h4 p-5">
                    Address
                </h3>
            </v-row>
            <v-row justify="center">
                <v-col>
                    <v-text-field v-model="form.street" :rules="streetRules" label="Street" hide-details required />
                </v-col>
                <v-col>
                    <v-text-field v-model="form.postalCode" :rules="postalCodeRules" label="Postal code" type="number"
                        hide-details required />
                </v-col>
                <v-col>
                    <v-text-field v-model="form.city" :rules="cityRules" label="City" hide-details required />
                </v-col>
                <v-col>
                    <v-text-field v-model="form.country" :rules="countryRules" label="Country" hide-details required />
                </v-col>
            </v-row>
            <v-row justify="center">
                <v-col cols="4">
                    <v-btn class="mt-2" type="submit" block :disabled="valid">
                        Submit
                    </v-btn>
                </v-col>
            </v-row>
        </v-container>
    </v-form>
</template>
