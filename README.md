# Bookstore Project

Este proyecto es una aplicación de gestión de una librería, desarrollada en Laravel, que permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre autores y libros. La aplicación incluye validaciones en el servidor y muestra mensajes de éxito para las operaciones realizadas.

## Características

- **Gestión de Autores**:
  - Crear un nuevo autor.
  - Listar todos los autores.
  - Editar un autor existente.
  - Eliminar un autor.
- **Gestión de Libros**:
  - Crear un nuevo libro.
  - Listar todos los libros.
  - Editar un libro existente.
  - Eliminar un libro.
- **Validación de Formularios**: Validación en el servidor para todos los campos requeridos.
- **Mensajes de Confirmación**: Mensajes de éxito tras realizar operaciones CRUD.

## Instalación

Sigue estos pasos para clonar e instalar el proyecto:

1. Clona el repositorio:
   ```sh
   git clone https://github.com/tu_usuario/bookstore.git
   cd bookstore
   ```

2. Instala las dependencias:
   ```sh
   composer install
   npm install
   npm run dev
   ```

3. Configura tu archivo `.env`:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. Configura la base de datos en tu archivo `.env` y ejecuta las migraciones:
   ```sh
   php artisan migrate
   php artisan db:seed
   ```

5. Inicia el servidor:
   ```sh
   php artisan serve
   ```

6. Accede a la aplicación en tu navegador:
   ```
   http://127.0.0.1:8000
   ```

## Estructura del Proyecto

- `app/Http/Controllers`:
  - `AuthorController.php`: Controlador para gestionar las operaciones CRUD de autores.
  - `BookController.php`: Controlador para gestionar las operaciones CRUD de libros.
  
- `app/Models`:
  - `Author.php`: Modelo del autor.
  - `Book.php`: Modelo del libro.

- `resources/views`:
  - `authors/index.blade.php`: Vista para listar los autores.
  - `authors/create.blade.php`: Vista para crear un nuevo autor.
  - `authors/edit.blade.php`: Vista para editar un autor.
  - `books/index.blade.php`: Vista para listar los libros.
  - `books/create.blade.php`: Vista para crear un nuevo libro.
  - `books/edit.blade.php`: Vista para editar un libro.
  - `layouts/app.blade.php`: Layout principal de la aplicación.

- `routes/web.php`: Rutas de la aplicación.

## Problemas y Soluciones

Durante el desarrollo del proyecto, se presentaron los siguientes problemas y se resolvieron de la siguiente manera:

1. **Problema con la relación entre libros y autores**: Inicialmente, no se había definido correctamente la relación en el modelo Book. Se añadió el método `author` en el modelo `Book` para definir la relación `belongsTo` con el modelo `Author`.

2. **Validación de formularios**: Los formularios no mostraban correctamente los mensajes de validación. Se corrigió utilizando `@error` y `old` en las vistas de creación y edición.

3. **Redireccionamiento y mensajes de éxito**: Después de realizar operaciones CRUD, los mensajes de éxito no se mostraban correctamente. Se resolvió utilizando `session('success')` en las vistas.

4. **Error en el método PUT para la actualización**: Al principio, la ruta para la actualización no estaba definida correctamente. Se corrigió asegurándose de que el método PUT estuviera permitido en las rutas y formularios.

5. **Navegación en la aplicación**: El enlace de navegación para "Bookstore" no redirigía a la página de inicio. Se ajustaron las rutas y se modificó el layout principal para asegurar la correcta navegación.

## Conclusión

## Conclusión

A pesar de haber enfrentado algunos problemas menores, se pudieron corregir rápidamente, lo que permitió que el desarrollo avanzara sin mayores inconvenientes. El proyecto fue completado con éxito, cumpliendo con todos los requisitos solicitados. Este proceso me ha permitido aprender nuevas técnicas y aplicar conocimientos adquiridos durante mi carrera, lo cual ha sido muy gratificante. Me siento contento de haber podido desarrollar una solución efectiva y funcional para la gestión de una librería.
