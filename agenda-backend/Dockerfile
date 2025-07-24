FROM php:8.2-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip curl git nano libzip-dev libpq-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www

# Copia todos los archivos del proyecto
COPY . .

# Instala dependencias de Laravel
RUN composer install

# Da permisos
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www/storage

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
