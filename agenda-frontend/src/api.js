import axios from 'axios'

const api = axios.create({
  baseURL: import.meta.env.VITE_API_URL,
})

export const getAppointments = async () => {
  const res = await api.get('/appointments')
  return res.data
}

export const createAppointment = async (data) => {
  await api.post('/appointments', data)
}

export const deleteAppointment = async (id) => {
    await api.delete('/appointments/${id}')
}

export const editAppointment = async (data) => {
    await api.update('/appointments', data)
}