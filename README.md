# CRUD PHP PDO

Aplicación web de gestión de personas con operaciones CRUD (Crear, Leer, Actualizar, Eliminar), construida con PHP nativo y PDO para la capa de acceso a datos.

## Requisitos

- PHP >= 7.4
- MySQL >= 5.7
- Extensión PDO y PDO_MySQL habilitadas

## Estructura del proyecto

```
crud-php-pdo/
├── app/
│   ├── head.php          # Cabecera HTML y carga de estilos
│   └── dependences.php   # Scripts JS al pie de página
├── model/
│   └── crud.class.php    # Clase Crud: conexión PDO y métodos de acceso a datos
├── view/
│   ├── home.php          # Página de inicio
│   ├── read.php          # Listado de personas
│   ├── create.php        # Formulario de creación
│   └── update.php        # Formulario de edición
├── public/
│   ├── css/
│   │   └── bootstrap.min.css
│   └── js/
│       ├── bootstrap.min.js
│       ├── jquery-3.4.1.min.js
│       └── popper.min.js
├── index.php             # Controlador frontal (enruta por ?vista=)
└── script.sql            # Script de inicialización de la base de datos
```

## Configuración de la base de datos

### 1. Crear la base de datos y la tabla

Ejecuta el script incluido en el repositorio:

```bash
mysql -u root -p < script.sql
```

O manualmente desde el cliente MySQL:

```sql
CREATE DATABASE pdo;
USE pdo;
CREATE TABLE persona (
  id    INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  edad   INT,
  email  VARCHAR(100)
);
```

### 2. Crear el usuario de base de datos

```sql
CREATE USER IF NOT EXISTS 'crud_user'@'localhost' IDENTIFIED BY '';
GRANT ALL PRIVILEGES ON pdo.* TO 'crud_user'@'localhost';
FLUSH PRIVILEGES;
```

> Si prefieres usar un usuario o contraseña diferente, actualiza los atributos `$user`, `$password` y `$db` en `model/crud.class.php` (líneas 5-7).

## Levantar el servidor de desarrollo

Desde la raíz del proyecto:

```bash
php -S localhost:8000
```

Luego abre el navegador en [http://localhost:8000](http://localhost:8000).

## Rutas disponibles

El enrutamiento se gestiona mediante el parámetro GET `vista` en `index.php`.

| URL | Descripción |
|-----|-------------|
| `/index.php` | Página de inicio |
| `/index.php?vista=read` | Listado de personas |
| `/index.php?vista=create` | Formulario para agregar persona |
| `/index.php?vista=set_create` | Procesa el alta (POST) |
| `/index.php?vista=update&id={id}` | Formulario para editar persona |
| `/index.php?vista=set_update` | Procesa la edición (POST) |
| `/index.php?vista=delete&id={id}` | Elimina una persona y redirige al listado |

## Dependencias frontend

Las librerías están incluidas localmente en `public/` y no requieren conexión a internet ni instalación adicional.

| Librería | Versión |
|----------|---------|
| Bootstrap | 4.x |
| jQuery | 3.4.1 |
| Popper.js | 1.x |
