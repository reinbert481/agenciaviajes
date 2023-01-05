# Agencia de Viajes

**1. Clonar el proyecto con:**

    git clone https://github.com/reinbert481/agenciaviajes.git

**2. Instalar dependencias con:**

    composer install
    npm install

**3. Crear el archivo ".env" y generar la clave "APP_KEY=" con:**

    cp .env.example .env
    php artisan key:generate

**4. En el archivo ".env" verificar el nombre de la base de datos (editar de ser necesario)**

**5. En "phpMyAdmin" crear la base de datos con el mismmo nombre que aparece en el archivo ".env"**

**6. Realizar las migraciones de las tablas a la base de datos con:**

    php artisan migrate

## El proyecto ya está listo para funcionar!

Este proyecto fue creado con Laravel 9. Se le agregó el paquete CRUD Generator de Ibex.
El paquete Ibex usa estilos de Bootstrap y trae incluído Laravel Collective que se puede
usar para el fácil manejo de formularios. Además se le agregó el paquete Laravel Permisos
de Spatie.

## Uso de la Aplicación

* **Iniciar el servidor XAMPP**

* **Iniciar la aplicación con:**

      php artisan serve

* **Registrar como primer usuario a:**

      nombre: Administrador
      email: admin@admin.com
      password: 12345678

     NOTA: Puede ser cualquier password con 8 caracteres mímimo. Registrar con esos datos es para tener
     acceso total a la aplicación ya que ese email está configurado como superusuario o superadministrador.
     Es una configuración necesaria de Spatie para poder administrar los roles y permisos.
  
_En una próxima actualización se explicará como crear roles y asignar permisos a cada rol._

**Buena suerte!**
