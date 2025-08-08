<template>
  <div>
    <h2 class="text-2xl font-bold mb-4">Citas agendadas</h2>
    <div v-if="!store.list || store.list.length === 0" class="alert alert-info alert-soft shadow-md">
        <p>📅 No hay citas disponibles</p>
    </div>
    <ul v-else class="space-y-2 rounded-box shadow-md list bg-base-100">
      <li v-for="appointment in store.list" :key="appointment.id" class="list-row">
        <p class="font-semibold text-xl uppercase">{{ appointment.title }} </p>
        <p class="font-semibold text-l">{{ services[appointment.service - 1] }}</p>
        <p class="text-sm text-gray-500">{{ appointment.date }} a las {{ appointment.time }}</p>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import { useAppointmentsStore } from '../stores/appointments'

const store = useAppointmentsStore()

const services= [
    'Instalación GPS para Autos Particulares',
    'GPS para Flotillas Comerciales',
    'GPS Antirrobo con Corte de Corriente Remoto'
]

onMounted(() => {
    store.fetchAppointments()
})

</script>
