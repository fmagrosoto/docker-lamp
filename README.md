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

## COMPOSER ##

Puedes trabajar con **Composer**, que es el gestor de dependencias de **PHP**, trabajando 
directamente desde otro contenedor. Ejecuta la siguente sentencia:

```bash
docker run --rm -it --volume $PWD:/app composer <comandos>
```

Donde los comandos pueden ser:

* install
* init
* requirere <dependencias>
* outadate
* update
* etc

Podrás ver la salida de estos comandos desde la terminal.

## LICENSE ##

Usa este reposiorio como quieras. La licencia de uso es [MIT](LICENSE).

## CONTACTO ##

Si tienes dudas, contáctame a mi correo personal:

**fmagrosoto@gmail.com**

***

Happy coding 🍺