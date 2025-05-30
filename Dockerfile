# Imagen base oficial de PHP con Apache
FROM php:8.2-apache

# Habilitar módulos de PHP necesarios
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Habilitar mod_rewrite de Apache (necesario para Laravel)
RUN a2enmod rewrite

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar los archivos del proyecto Laravel
COPY . .

# Asignar permisos a los directorios de Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Configurar Apache para permitir .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Sobrescribir la configuración por defecto de Apache para que apunte a /public
COPY ./docker/apache/laravel.conf /etc/apache2/sites-available/000-default.conf

# Exponer el puerto 80
EXPOSE 80

COPY docker/wait-for-it.sh /usr/local/bin/wait-for-it.sh
RUN chmod +x /usr/local/bin/wait-for-it.sh

# Comando por defecto
# Copiar el entrypoint
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

# No asumas que puede ser ejecutable, llámalo con sh
ENTRYPOINT ["sh", "/usr/local/bin/entrypoint.sh"]
