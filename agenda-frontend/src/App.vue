<template>
  <div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-4xl font-bold py-4 px-4">Servicios</h1>
        <div class="bg-base-100 border-base-300 collapse border">
          <div class="collapse bg-base-100 border border-base-300">
            <input type="radio" name="my-accordion-1" checked="checked" />
            <div class="collapse-title font-semibold">1. Instalación GPS para Autos Particulares</div>
            <div class="collapse-content text-sm">Seguimiento en tiempo real y alertas de movimiento para vehículos personales.
            Incluye configuración básica, asesoría y garantía de 6 meses.
            Ideal para quienes buscan mayor seguridad y control sobre su auto. <br>
            <br>
            🔧 Duración estimada: 1 hora <br>
            💰 Costo estimado: $800 MXN
            </div>
          </div>
          <div class="collapse bg-base-100 border border-base-300">
            <input type="radio" name="my-accordion-1" />
            <div class="collapse-title font-semibold"></div>
            <div class="collapse-content text-sm"></div>
          </div>
          <div class="collapse bg-base-100 border border-base-300">
            <input type="radio" name="my-accordion-1" />
            <div class="collapse-title font-semibold">2. GPS para Flotillas Comerciales</div>
            <div class="collapse-content text-sm">Instalación de GPS con sistema de gestión para múltiples unidades:
            control de rutas, historial de recorridos y reportes automáticos.
            Integración con plataforma web incluida. <br>
            <br>
            🔧 Duración estimada por unidad: 45 min <br>
            💼 Costo por unidad: $650 MXN (precio preferencial por volumen)</div>
          </div>
          <div class="collapse bg-base-100 border border-base-300">
            <input type="radio" name="my-accordion-1" />
            <div class="collapse-title font-semibold">3. GPS Antirrobo con Corte de Corriente Remoto</div>
            <div class="collapse-content text-sm">Sistema de localización avanzada con función de apagado remoto desde el celular.
            Pensado para zonas de alto riesgo o vehículos de carga. <br>
            <br>
            🛠 Requiere autorización técnica adicional. <br>
            💰 Costo: $1,200 MXN</div>
          </div>
          
        </div>
        <AppointmentList class="py-6"/>
      </div>
      <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <div class="card-body">
          <fieldset class="fieldset">
            <AppointmentForm />
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import AppointmentForm from './components/AppointmentForm.vue'
import AppointmentList from './components/AppointmentList.vue'
</script>

   