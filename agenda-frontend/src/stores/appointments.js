import { defineStore } from 'pinia'
import { getAppointments, createAppointment } from '../api.js'

// defineStore crea el "store" que usaremos en todos los componentes
export const useAppointmentsStore = defineStore('appointments', {
  state: () => ({
    list: [] // Aquí vivirán todas las citas
  }),

  actions: {
    async fetchAppointments() {
      this.list = await getAppointments()
    },

    async addAppointment(data) {
      await createAppointment(data)
      await this.fetchAppointments() // Recargar lista después de crear
    }
  }
})
