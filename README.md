<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/3f/ATP_Tour_logo.svg/1200px-ATP_Tour_logo.svg.png" width="400" alt="Laravel Logo"></a></p>


## Índice

1. [Introducción](#Introducción)
2. [Tecnologías utilizadas](#Tecnologías-utilizadas)
3. [Test](#Test)
4. [Futuras mejoras](#Futuras-mejoras)
5. [Proyecto](#Proyecto)


## Introducción

ATP Laravel es una aplicación web que gestiona a los tenistas y a los torneos que forman parte del circuito ATP. Estas gestiones son:

- CRUD Tenistas.
- CRUD Torneos.
- Introducir jugadores en los torneos.
- Eliminar jugadores de los torneos.
- Ver ranking actual de los tenistas.
- Gestionar puntos y ganancias de los jugadores que han participado en un torneo.


## Tecnologías utilizadas

- **[Laravel](https://laravel.com/docs/11.x). Laravel es un framework de código abierto para desarrollar aplicaciones y servivios web con PHP.
- **[PostgreSQL](https://www.postgresql.org/docs/current/). Es un sistema de gestión de bases de datos relacional orientado a objetos y de código abierto.
- **[Docker](https://docs.docker.com/build/cloud/). Es un proyecto de código abierto que automatiza el despliegue de aplicaciones dentro de contenedores de software. Lo usaremos para desplegar la aplicación.


## Test

Pantallazo del coverage y explicar un poco 


## Futuras mejoras

- Gestionar ranking femenino WTA y cuadro mixto.
- Añadir la categoría de Grand Slam en los torneos.
- Head2Head.
- Predictor.
- Enlace a Tennis TV.
- Ver los resultados en directo.

## Proyecto

### Modelo Entidad-Relación

![image](https://github.com/miviru/ATPLaravel/assets/132077764/efe67c66-05b0-4458-ad4a-3ca2bb462975)


Aquí podemos apreciar el modelo entidad-relación. El proyecto se divide en tres partes: El tenista, con unos atributos suficientes para poder conocer todos sus datos relevantes y estadísticas. Tiene también unos métodos básicos y típicos de un CRUD además de unos propios. Estos métodos propios son el getEdad(), que consiste en calcular la edad en base de la fecha de nacimiento introducida; el getWinRate(), calcula el porcentaje de victoria con los datos de las victorias y las derrotas; y por último el descargarPDF(), utilizado para exportar los datos en un PDF.
Por parte de torneo, tiene unos atributos para conocer todos los datos necesarios que se pide a un torneo, y los métodos básicos de un CRUD.
La inscripción es la parte que hace de nexo entre tenista y torneo. Tiene una relación muchos a un con las dos partes, (un tenista tiene muchas inscripciones y un torneo tiene muchas inscripciones). Al tener relación con otras clases comparte atributos. Estos son el id del tenista, el id del torneo, los puntos que tiene tanto tenista como el torneo, y las ganancias que reparte el torneo y tiene el tenista. Los métodos son propios. ParticiparTorneo() introduce un tenista en un torneo, VerInscripciones() se utiliza para ver a todos los tenistas que están inscritos en un torneo. VerTorneosInscritos() se utiliza para ver todos los torneos en los que un tenista ha participado. Por último están los métodos para sumar los puntos y las ganancias a los tenistas en función de la posición que han quedado.

A continuación se van a mostrar distintas vistas de la web para enseñar su forma y explicar su funcionamiento.








