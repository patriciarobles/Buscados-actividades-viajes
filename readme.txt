// Este proyecto se ha realizado en php 7.3 utilizando el framework Laravel .

Se puede ver el proyecto en la siguiente URL: https://patriciacivitatis.azurewebsites.net/public/


Para su despliegue, es necesario disponer de php y composer

Copiar el archivo .env.example y nombrarlo a .env. Indicar los datos de la base de datos:
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

Indicar la URL del dominio dónde se despliegue:
APP_URL=

Ejecutar los siguientes comandos:

php artisan key:generate
php artisan migrate
php artisan db:seed


