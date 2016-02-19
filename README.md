# aplicacion-php
Ejercicio de despliegue de aplicaciones web. Para instalar esta apliación, es necesario:
* Clonar este repositorio en un directorio que sirva un sistema LAMP.
* Crear una base de datos con el esquema del fichero esquema-bbdd.sql.
* Cambiar el fichero config.php para que la aplicación PHP sepa cómo conectar a la base de datos.
* La página de inicio de la aplicación será usuarios.php.
* Instalar la aplicación para que pueda accederse en la url http://<servidor>/<alumno>/examen

Datos de las cuentas:
* Hay una base de datos mysql, accesible en <servidor>, con el usuario <alumno>, contraseña <alumno>, esquema <alumno>.
* El apache está configurado para servir los directorios $HOME/public_html en http://<servidor>/<alumno>.
* El apache tiene la directiva AllowOverride All para todos los directorios.

Criterios:
* 
