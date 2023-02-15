# Agencia de Viajes

**1. Clonar el proyecto con:**

```bash
git clone https://github.com/reinbert481/agenciaviajes.git
```
y luego cambiar a la carpeta "agenciaviajes" con:
```bash
cd agenciaviajes
```
**2. Instalar dependencias con:**

```bash
composer install
```
```bash
npm install
```

**3. Crear el archivo ".env" y generar la clave "APP_KEY=" con:**

```bash
cp .env.example .env
```
```bash
php artisan key:generate
```

**4. En el archivo ".env" verificar el nombre de la base de datos (editar de ser necesario)**

**5. En "phpMyAdmin" crear la base de datos con el mismmo nombre que aparece en el archivo ".env"**

**6. Realizar las migraciones de las tablas a la base de datos con:**
```bash
php artisan migrate
```

## El proyecto ya está listo para funcionar!

Este proyecto fue creado con Laravel 9. Se le agregó el paquete CRUD Generator de Ibex.
El paquete Ibex usa estilos de Bootstrap y trae incluído Laravel Collective que se puede
usar para el fácil manejo de formularios. Además se le agregó el paquete Laravel Permisos
de Spatie.

## Uso de la Aplicación

* **Iniciar el servidor XAMPP**

* **Iniciar la aplicación con:**

```bash
php artisan serve
```
NOTA: si aparece el error `Illuminate\Database\QueryExeption` ir al archivo "database.php"
	en la carpeta "config" y en la sección "mysql" editar las siguientes líneas:
```php
'charset => 'utf8mb4',
'collation' => 'utf8mb4_unicode_ci',
'engine' => null,
```
para que diga:
```php
'charset => 'utf8',
'collation' => 'utf8_unicode_ci',
'engine' => 'innodb',
```
Luego de editar estas líneas hay que vaciar la base de datos antes de volverlas a migrar.

(Para vaciar la base de datos eliminar todas las tablas desde phpMyAdmin. Eliminar sólo las tablas, NO la base de datos).

Una vez vuelta a hacer la migración tendrían que aparecer todas las tablas correctamente y sin problemas.

* **Registrar como primer usuario a:**

`nombre: Administrador`
`email: admin@admin.com`
`password: 12345678`

NOTA: Puede ser cualquier password con 8 caracteres mímimo. Registrar con esos datos es para tener
acceso total a la aplicación ya que ese email está configurado como superusuario o superadministrador.
Es una configuración necesaria de Spatie para poder administrar los roles y permisos.
  
Por ahora la aplicación tiene configurados permisos para las tablas `Roles` y `Vehiculos`. Para poder usarlos
en la aplicación hay que cargar la tabla `Permisos` con el comando:

```bash
php artisan db:seed --class=SeederTablaPermisos
```
---
**En futuras actualizaciones se agregará más documentación explicando la evolución y/o correcciones del proyecto.**

---

**Buena suerte!**
