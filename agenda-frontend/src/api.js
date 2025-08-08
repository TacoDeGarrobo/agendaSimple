import axios from 'axios'
import { resolveDirective } from 'vue'

const api = axios.create({
  baseURL: import.meta.env.VITE_API_URL,
})

export const getAppointments = async () => {
  const res = await api.get('/appointments')
  return res.data
}

export const createAppointment = async (data) => {
  const res = await api.post('/appointments', data)
  return res.data
}

export const deleteAppointment = async (id) => {
    await api.delete(`/appointments/${id}`)
}

export const editAppointment = async (id, data) => {
  const res = await api.put(`/appointments/${id}`, data)
  return res.data
}