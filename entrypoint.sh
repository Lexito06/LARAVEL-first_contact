#!/bin/bash

# Esperar a que la base de datos esté lista
echo "Esperando a que la base de datos esté disponible..."
/usr/local/bin/wait-for-it.sh db:3306 --timeout=60 --strict -- echo "Base de datos lista."

# Ejecutar migraciones
php artisan migrate --seed --force

# Iniciar Apache
exec apache2-foreground
