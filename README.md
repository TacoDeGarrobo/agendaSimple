# 🗓️ Agenda Simple

Una aplicación web minimalista para agendar citas con un flujo intuitivo y validaciones en tiempo real.
Desarrollada con Laravel 12 (API) y Vue 3 (frontend).
Lista para ejecutarse con Docker y pensada como proyecto de portafolio o base para soluciones reales de agendado.

---

## 🧱 Tecnologías utilizadas

- ✅ Laravel 12 (API RESTful)
- ✅ MySQL 5.7 (Docker)
- ✅ Vue 3 + Vite 
- ✅ Tailwind CSS + DaisyUI
- ✅ Docker + Docker Compose

---

## 🚀 ¿Qué hace esta app?

- 📆 Listado de citas agendadas
- ➕ Creacion de citas (nombre, fecha, hora y servicio)
- 🛡 Validacion de fechas disponibles
- ⏱ Bloqueo automatico de horarios ocupados
- 🌐 API limpia y lista para consumir desde cualquier frontend

---

## 🖼️ Vista previa

<h3>Pantalla principal</h3>
<img width="1906" height="891" alt="pantalla-principal" src="https://github.com/user-attachments/assets/75bf8c49-e01a-4032-9dc0-093603de3c25" /> <br>

<h3>Validacion de fecha no disponible</h3>
<img width="1234" height="861" alt="validacion-fecha-no-disponible" src="https://github.com/user-attachments/assets/fd951253-5c08-4364-82dc-c31ced4fe325" /><br>

<h3>Creacion de cita exitosa</h3>
<img width="1230" height="956" alt="creacion-de-cita-exitosa" src="https://github.com/user-attachments/assets/ee69f038-8b9a-44d5-8aaf-ae6669bf931e" /><br>

<h3>Bloqueo de horario ocupado</h3>
<img width="1062" height="836" alt="bloque-de-horario-ocupado" src="https://github.com/user-attachments/assets/12d80ecf-52f3-4c2d-83bc-6956e7678537" /><br>

<h3>Servicios disponibles</h3> <br>
<img width="799" height="323" alt="servicio-2" src="https://github.com/user-attachments/assets/e6e427e6-454b-4b8b-a4d3-f28fd7d5eb12" /><br>
<img width="808" height="353" alt="servicio-3" src="https://github.com/user-attachments/assets/6af74096-58f3-4e3f-9ca6-9d7eab71aa86" /><br>

<h3>Base de datos con cita guardada</h3>
<img width="1063" height="471" alt="db-con-cita-creada" src="https://github.com/user-attachments/assets/9c51c4ed-58b6-4207-9e08-ff3ad1c8ab4c" /><br>

<h3>Backend en ejecucion</h3>
<img width="1118" height="316" alt="backend-en-ejecucion" src="https://github.com/user-attachments/assets/6dcd0b6d-55a7-49b7-a1f6-4f7bd97542c5" />

---

## ⚙️ Requisitos

- Docker Desktop con WSL 2 (Windows)
- Git
- (Opcional) Node.js + npm si vas a correr el frontend localmente

---

## 🐳 Instrucciones de instalación

# Clonar repositorio
git clone https://github.com/tuusuario/agenda-simple.git
cd agenda-simple/backend

# Copiar archivo de entorno
cp .env.example .env

# Levantar contenedores
docker compose up --build

# Migraciones
docker compose exec app bash
php artisan migrate
exit

**API disponible en:**
http://localhost:8000/api/appointments

---

## 🛠️ Estructura del proyecto
agenda-simple/ <br>
    ├── backend/        # Proyecto Laravel 12 <br>
    ├── frontend/       # Proyecto Vue 3  <br>
    └── docker-compose.yml

---

## 📫 Contacto
- Desarrollado por Angel Gabriel Cortes
- Email: cogaanga8@gmail.com
- GitHub: @cogaanga8


