# Instalación Proyecto

Este es un proyecto basado en Laravel 11. Sigue los siguientes pasos para configurar el proyecto en tu máquina local.

## Prerrequisitos

Asegúrate de tener instalados los siguientes requisitos en tu sistema:

- PHP >= 8.1
- Composer
- MySQL o cualquier otra base de datos que prefieras utilizar
- Node.js y npm (para la gestión de paquetes front-end y compilación de assets)
- Git (para clonar el repositorio)

## Instalación

Sigue estos pasos para instalar y configurar el proyecto:

1. **Clonar el repositorio**

   ```bash
   git clone https://github.com/zaratedev/livewire-cf
   cd livewire-cf
   ```

2. Instalar dependencias
```bash
composer install
```

3. Configurar el .env

Copia el archivo .env.example a .env y modifica las variables de entorno según tu configuración local.

```bash
cp .env.example .env

```

4. Generar la clave de la aplicación

```bash
php artisan key:generate
```

5. Configurar la base de datos

Abre el archivo .env y actualiza las siguientes líneas con la configuración de tu base de datos:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

6. Ejecutar migraciones 
```bash
php artisan migrate
```

7. Instalar dependencias de Node.js

```bash
npm install
```

8. Compilar assets

```bash
npm run dev
```

9. Iniciar servidor

```bash
php artisan serve
```

Ahora puedes acceder a la aplicación en tu navegador a través de la URL http://127.0.0.1:8000.