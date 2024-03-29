
## Boilerplate API REST, LARAVEL 5.*, JWT, VUE

### Comandos a ejecutar (Tomando en cuenta un entorno Windows), una vez clonado el proyecto

1.  `copy .env.example .env`
2.  `composer install`
3.  `yarn`
4.  `php artisan key:generate`
5.  `php artisan vendor:publish --provider="Barryvdh\Cors\ServiceProvider"`
6.  `php artisan vendor:publish --tag=lang`
7.  `php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"`
8.  `php artisan jwt:secret`
9.  `git checkout -b develop`


### Acciones ya programadas

1. Registro de usuarios
2. Autentificación de usuarios
3. Obtener información del usuario autentificado


### Consideraciones  

1. Asignar valores para `APP_NAME`, `APP_URL`, `API_URL` en .env
2. Credenciales por defecto `admin@supernovaapps.com.mx` y la contraseña `adminsystem123` (Nunca cambiar)
3. Crear Modelos del tipo `php artisan make:model Nombre -r` lo cual creará tambien el controlador
4. Revisar ortografía
5. Todas las rutas de la API Rest se deberán declarar en el archivo `/routes/api.php` y devolverán siempre un JSON
6. Identar a 4 espacios
7. Siempre sincronizar cambios de código a DEVELOP `git push origin develop`
8. Siempre documentar
  

### Estatus HTTP

- 200 -> Petición realizada exitosamente
- 201 -> recurso creado correctamente

- 400 ->
- 401 ->
- 403 ->
- 404 -> Recurso no encontrado

- 500 ->