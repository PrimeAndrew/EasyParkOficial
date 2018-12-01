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
Para probar este proyecto seguir los siguientes pasos:

* Clonar el respositorio:
>   $ git clone https://github.com/PrimeAndrew/EasyParkOficial.git

Una vez instalado todos los requisitos para empezar el proyecto, levantar el "Dockerfile" para levantar el contenedor del proyecto
* Dentro del proyecto clonado:
>   $ sudo docker-compose up

Levantar otra terminal
Para ingresar iterativamente al contenedor:
>   $ sudo docker exec -it "easyparkoficial_web_1" /bin/bash

Ingresamos al proyecto para instalar las dependencias
* composer install

En la equipo "host" remplazamos los siguientes <a target="_blank" href="https://drive.google.com/drive/folders/15vt0CJ0UQ0vgmmlTPOLnNXTVuKEAK4CB?usp=sharing">archivos</a> en la siguiente direccion:
> user@user:~/UbicacionDelProyecto/EasyParkOficial/taller2018/vendor/genealabs/phpgmaps/src/GeneaLabs/Phpgmaps



Autor(es)
