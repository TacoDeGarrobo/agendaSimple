<template>
  <form @submit.prevent="handleSubmit" class="mb-6">
    <h2 class="text-2xl font-bold mb-4">Nueva cita</h2>
    <input v-model="title" id="title" type="text" placeholder="Título" class="input input-bordered w-full mb-2" />
    <input v-model="date" @change="validateDate" :min="today" id="date" type="date" class="input input-bordered w-full mb-2" />
    <select id="time" v-model="time" class="select mb-2 w-full">
        <option value="">Selecciona un horario</option>
        <option v-for="h in hours" :key="h.value" :value="h.value">{{ h.value }}</option>
    </select>
    <select id="service" class="select mb-2 w-full" v-model="service">
        <option value="">Selecciona una opcion</option>
        <option value="1">Servicio 1</option>
        <option value="2">Servicio 2</option>
        <option value="3">Servicio 3</option>
    </select>
    <button class="btn btn-primary w-full">Crear</button>
  </form>
</template>

<script setup>
import { ref } from 'vue'
import { useAppointmentsStore } from '../stores/appointments'

const store = useAppointmentsStore()

const title = ref('')
const date = ref('')
const time = ref('')
const service = ref('')

const hours = [
  { value: '12:00', label: '12:00 pm' },
  { value: '13:00', label: '1:00 pm' },
  { value: '14:00', label: '2:00 pm' },
  { value: '15:00', label: '3:00 pm' },
  { value: '16:00', label: '4:00 pm' },
]
const blockDates = [
    '2025-12-25'
]

const validateDate = () => {
    if (blockDates.includes(date.value)){
        alert ('❌Esta fecha no esta disponible')
        date.value= ''
    }
}

const today = new Date().toISOString().split('T')[0]

const handleSubmit = async () => {
  if (!title.value || !date.value || !time.value || !service.value){
  alert('❌ Todos los campos son obligatorios')
    return
  }
    await store.addAppointment({
        title: title.value,
        time: time.value,
        date: date.value,
        service: service.value
})

title.value = date.value = time.value = ''
  alert('✅ Cita creada')

}
</script>
