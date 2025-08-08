<template>
  <form @submit.prevent="handleSubmit" class="mb-6">
    <h2 class="text-2xl font-bold mb-4">Nueva cita</h2>
    <input v-model="title" id="title" type="text" placeholder="Título" class="input input-bordered w-full mb-2" />
    <input v-model="date" @change="validateDate" :min="today" id="date" type="date" class="input input-bordered w-full mb-2" />
    <select id="time" v-model="time" class="select select-primary mb-2 w-full">
        <option value="">Selecciona un horario</option>
        <option v-for="h in hours" :key="h.value" :value="h.value" :disabled="(isDisabled = isTimeTaken(date, h.value))">{{ h.value }}<span v-if="isDisabled"> - Ocupado </span></option>
    </select>
    <select id="service" class="select select-primary mb-2 w-full" v-model="service">
        <option value="">Selecciona una opcion</option>
        <option value="1">Instalación GPS para Autos Particulares</option>
        <option value="2">GPS para Flotillas Comerciales</option>
        <option value="3">GPS Antirrobo con Corte de Corriente Remoto</option>
    </select>
    <button class="btn btn-primary w-full">Crear</button>
  </form>
</template>

<script setup>
import { ref, watch } from 'vue'
import { useAppointmentsStore } from '../stores/appointments'

const store = useAppointmentsStore()

const title = ref('')
const date = ref('')
const time = ref('')
const service = ref('')
const blockedSlots = ref([])

const hours = [
  { value: '12:00', label: '12:00 pm' },
  { value: '13:00', label: '1:00 pm' },
  { value: '14:00', label: '2:00 pm' },
  { value: '15:00', label: '3:00 pm' },
  { value: '16:00', label: '4:00 pm' },
]
/*Incluir fechas festivas o no disponibles
Proximamente: Menu en la interfaz para agregar desde ahi */
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

watch(date, async (newDate) => {
  if(!newDate)
    return
  
  await store.fetchAppointments()
  console.log(store.list)
  blockedSlots.value = store.list
  .filter(app => app.date ===newDate)
  .map(app => ({ date: app.date, time: app.time.slice(0, 5)}))
})

const isTimeTaken = (d,h) => {
  return blockedSlots.value.some(slot => slot.date === d && slot.time === h)
}

</script>
