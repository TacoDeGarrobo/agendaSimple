<template>
  <main class="max-w-xl mx-auto p-6">
    <AppointmentForm />
    <AppointmentList />
  </main>
</template>

<script setup>
import AppointmentForm from './components/AppointmentForm.vue'
import AppointmentList from './components/AppointmentList.vue'
</script>
