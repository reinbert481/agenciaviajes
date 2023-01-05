Agencia de Viajes

Clonar el proyecto con:
	git clone https://github.com/reinbert481/agenciaviajes.git

Instalar dependencias con:
	composer install

Si el proyecto tiene componentes de node tambien instalar estas dependencias con:
	npm install

Crear el archivo ".env" y generar la clave "APP_KEY=" con:
	cp .env.example .env
	php artisan key:generate

En el archivo ".env" verificar el nombre de la base de datos (editar de ser necesario)

En "phpMyAdmin" crear la base de datos con el mismmo nombre que aparece en el archivo ".env"

Realizar las migraciones de las tablas a la base de datos con:
	php artisan migrate

El proyecto ya está listo para funcionar!

Este proyecto fue creado con Laravel 9. Se le agregó el paquete CRUD Generator de Ibex.
El paquete Ibex usa estilos de Bootstrap y trae incluído Laravel Collective que se puede
usar para el fácil manejo de formularios. Además se le agregó el paquete Laravel Permisos
de Spatie.

Uso de la Aplicación

Registrar como primer usuario a:
	nombre: Administrador
	email: admin@admin.com
	password: 12345678 (puede ser cualquier password de al menos 8 caracteres)

En una próxima actualización se explicará como crear roles y asignar permisos a cada rol.

Buena suerte!