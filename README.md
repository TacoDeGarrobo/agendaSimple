# 🗓️ Agenda Simple

Una aplicación web minimalista para agendar citas, desarrollada con **Laravel (API)** y **Vue 3 (frontend)**. El proyecto está preparado para correr de forma profesional con **Docker**, ideal para portafolio o uso como base de soluciones reales.

---

## 🧱 Tecnologías utilizadas

- ✅ Laravel 10 (API RESTful)
- ✅ MySQL 5.7 (con Docker)
- ✅ Vue 3 + Vite (próximamente)
- ✅ Tailwind CSS (frontend)
- ✅ Docker + Docker Compose

---

## 🚀 ¿Qué hace esta app?

- 📆 Lista todas las citas agendadas
- ➕ Permite crear nuevas citas (nombre, fecha, hora)
- ❌ Permite eliminar citas existentes
- 🌐 API limpia y lista para consumir desde cualquier frontend

---

## ⚙️ Requisitos

- Docker Desktop con WSL 2 (Windows)
- Git
- (Opcional) Node.js + npm si vas a correr el frontend localmente

---

## 🐳 Instrucciones de instalación

1. **Clona el proyecto**
   ```bash
   git clone https://github.com/tuusuario/agenda-simple.git
   cd agenda-simple/backend
2. **Copia el archivo de entorno**
cp .env.example .env

3. **Levanta los contenedore**
docker compose up --build

4. **Accede al contenedor de laravel y corre migraciones**
docker compose exec app bash
php artisan migrate
exit

5. **Visita la app**
API disponible en: http://localhost:8000/api/appointments

---

## 🛠️ Estructura del proyecto
agenda-simple/ <br>
    ├── backend/        # Proyecto Laravel (API) <br>
    ├── frontend/       # Proyecto Vue 3 (próximamente) <br>
    └── docker-compose.yml

---

## 📫 Contacto
- Desarrollado por Angel Gabriel Cortes
- Email: cogaanga8@gmail.com
- GitHub: @cogaanga8

---

## ⚠️ Notas
La app aún no tiene autenticación, es completamente abierta.

En producción se recomienda agregar seguridad y validaciones adicionales.

