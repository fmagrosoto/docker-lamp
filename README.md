# LAMP USANDO DOCKER #

Ejemplo para levantar un servidor web con **PHP**, **MySQL** y **phpMyAdmin** usando
nada más que DOCKER.

Esto lo podemos usar en equipos donde NO tengas instalado un servidor WEB.

## PROYECTO ##

* Historia: Nov 2021
* Autor: Fernando Magrosoto V. <fmagrosoto@gmail.com>
* Herramientas de Desarrollo: Docker

## CÓMO USAR EL PROYECTO ##

Por supuesto, deberemos tener instalado **DOCKER** en nuestro equipo.

De preferencia, también instala **GIT** para que puedas gestionar tu repositorio.

Luego, solo deberás de usar tu consola y escribir el siguiente comando:

```
docker-compose up -d
```

Y entonces habrás levantado todo el servidor.

El contenido de tu sitio web deberá de estar en la carpeta 
*public_html* y podrás visualiarlo desde tu navegador desde 
*localhost:8080*.

Y **phpMyAdmin** lo podrás ver desde *localhost:5000*.

Toda la configuración se encuentran en los archivos:
```Dockerfile```  ```docker-compose.yml```.

Para detener el servidor, ejecuta:

```bash
docker-compose down
```

También puedes acceder a la carpeta de trabajo usando:

```bash
docker exec -it {nombre-del-servidor} /bin/bash
```

El nombre del servidor lo podrás ver desde:

```bash
docker-compose ps
```

Dentro de la carpeta de trabajo puedes instalar dependencias 
usando *composer*.

**NOTA**: Al levantar el servidor, Docker instalará las 
dependencias de *composer* automáticamente porque correrá el 
*script* descrito en el archivo ```install-composer.hs``` que está dentro de la carpeta ```public_html```.

## LICENSE ##

Usa este reposiorio como quieras. La licencia de uso es [MIT](LICENSE).

## CONTACTO ##

Si tienes dudas, contáctame a mi correo personal:

**fmagrosoto@gmail.com**

***

Happy coding 🍺