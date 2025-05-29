#!/bin/bash

# Cambia al directorio de tu aplicación
cd /home/site/wwwroot

# Inicia el servidor PHP embebido apuntando a la carpeta public/
php -S 0.0.0.0:8080 -t public
