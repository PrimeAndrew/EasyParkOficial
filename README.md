Project: EASYPARK
===
<div align="center">
    <center>
        <img src="https://assets.simpleviewcms.com/simpleview/image/fetch/c_fill,h_396,q_75,w_704/https://res.cloudinary.com/simpleview/image/upload/crm/vancouverbc/PARK-LOGO-5fb147a25056b3a_5fb148e0-5056-b3a8-492c8f259b50ec6f.jpg" width="400px"/>
    </center>
</div>

Repositorio de proyecto final de la materia "Taller de Sistemas 2-2018 UCB", llevado a cabo en la ciudad de La Paz-Bolivia a cargo del <a target="_blank" href="http://github.com/ernestomar">Ing. Ernesto Campo Hermoso</a> .

Nombre Aplicación.
---
El nombre de la aplicación es: EASYPARK

Objetivo
---
Facilitar la busqueda y reservas de parqueos publicos al rededor del dispositivo de uso,


Requisitos
---
* Docker version 18.06.1-ce
* Composer version 1.7.3


Probar proyecto
---
Nota:
En caso de necesitar permisos y escritura para configurar archivos, dar los permisos correspondientes.

Para probar este proyecto seguir los siguientes pasos:

* Clonar el respositorio:
>   $ git clone https://github.com/PrimeAndrew/EasyParkOficial.git

Una vez instalado todos los requisitos para empezar el proyecto, levantar el "Dockerfile" para levantar el contenedor del proyecto
* Dentro del proyecto clonado:
>   $ sudo docker-compose up

* Levantar otra terminal, para ingresar iterativamente al contenedor:
>   $ sudo docker exec -it "easyparkoficial_web_1" /bin/bash

* Ingresamos al proyecto dentro del contenedor:
>   container@container:~/dev/taller2018/

* Instalamos dependencias del proyecto
>   $ composer install

* En el equipo "host" remplazamos los siguientes <a target="_blank" href="https://drive.google.com/drive/folders/15vt0CJ0UQ0vgmmlTPOLnNXTVuKEAK4CB?usp=sharing">archivos</a> en la siguiente direccion:
> host@host:~/UbicacionDelProyecto/EasyParkOficial/taller2018/vendor/genealabs/phpgmaps/src/GeneaLabs/Phpgmaps

* Una vez remplazados los archivos en el "host", en el "contenedor" actualizamos las dependencias:
>   $ composer up   

* Volvemos a la carpeta principal del proyecto en el contenedor:
>   container@container:~/dev/taller2018/

Configuramos el archivo .env
* Copiamos el archivo .env.example en el archivo .env
> cp .env.example .env

* En el "host" editamos el archivo .env remplazando las siguientes lineas de esta manera:
>   DB_CONNECTION=pgsql <br>
>   DB_HOST=db <br>
>   DB_PORT=5432 <br>
>   DB_DATABASE=postgres <br>
>   DB_USERNAME=postgres <br>
>   DB_PASSWORD=postgres <br>

* Generamos las llaves del proyecto:
>   $ php artisan key:generate

* Sincroizamos archivos:
>   $ composer dump-autoload

* Levatamos las migraciones y los seeders:
>   $ php artisan migrate:refresh --seed

* Levatamos el proyecto:
>   $ php artisan serve --host=0.0.0.0

En caso de poder ingresar a la base de datos, usar el puerto "15432" en la coneccion con postgres.






Autor(es)
* Jose Lujan Escalera
* Jose Cordova
* Mateo Navia
* Wendy Guzman Rojas
* Ronald Aparicio Yañez

/*prime*/
