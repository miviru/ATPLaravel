<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/3f/ATP_Tour_logo.svg/1200px-ATP_Tour_logo.svg.png" width="400" alt="Laravel Logo"></a></p>


## Índice

1. [Introducción](#Introducción)
2. [Tecnologías utilizadas](#Tecnologías-utilizadas)
3. [Test](#Test)
4. [Futuras mejoras](#Futuras-mejoras)
5. [Proyecto](#Proyecto)
6. [Contacto](#Contacto)
7. [Autor](#Autor)
   


## Introducción

ATP Laravel es una aplicación web que gestiona a los tenistas y a los torneos que forman parte del circuito ATP. Estas gestiones son:

- CRUD Tenistas.
- CRUD Torneos.
- Introducir jugadores en los torneos.
- Eliminar jugadores de los torneos.
- Ver ranking actual de los tenistas.
- Gestionar puntos y ganancias de los jugadores que han participado en un torneo.


## Tecnologías utilizadas

- **[Laravel]**(https://laravel.com/docs/11.x). Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP.
- **[PostgreSQL]**(https://www.postgresql.org/docs/current/). Es un sistema de gestión de bases de datos relacional orientado a objetos y de código abierto.
- **[Docker]**(https://docs.docker.com/build/cloud/). Es un proyecto de código abierto que automatiza el despliegue de aplicaciones dentro de contenedores de software. Lo usaremos para desplegar la aplicación.
- **[Bootstrap 5]**(https://getbootstrap.com/docs/5.0/getting-started/introduction/). Es un conjunto de herramientas de interfaz potente y repleto de funciones. Se utiliza para dar formato y mejorar las vistas.


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



![image](https://github.com/miviru/ATPLaravel/assets/132077764/7599cf37-e52c-4004-938b-95b668cba93e)
Esta es la vista del index principal. La web se divide en un header con el logo, el nombre y los botones para registrarse e iniciar sesión. En la parte central hay un botón para entrar en el index de tenistas y otro para el de torneos. En la parte de abajo se encuentra el footer con el nombre, el github del proyecto, mi nombre y los enlaces de youtube, instagram, twitter, facebook y linkedin de la ATP.

![image](https://github.com/miviru/ATPLaravel/assets/132077764/3cd533c5-7790-46f5-9927-a60e78f53df5)
Este es el index del tenista. Es la versión del admin ya que se puede ver la carta para crear un tenista. Continúa el header y footer y la parte central se muestran los tenistas en orden de ranking. Se pueden ver los nombres, puntos y el ranking, además de los botones de ver más, editar, eliminar y participaciones. Además tiene un buscador de nombre y país por el cual se puede filtrar. También está paginado.


![image](https://github.com/miviru/ATPLaravel/assets/132077764/f4c79bdf-1da0-4b1a-91b1-3e2856cdb2f4)
Esta es la vista de la web que muestra los datos del tenista. Además incluye el botón para exportar a PDF.

![image](https://github.com/miviru/ATPLaravel/assets/132077764/a2cbd6f7-72f4-4578-bae0-7fe7b4d44a50)
Esta es la vista del formulario para crear un tenista. Cuenta con validaciones en distintos campos. La vista de editar es similar pero sin algunos campos ya que hay varios atributos que, en teoría, no se pueden cambiar, (fecha nacimiento, profesional desde, nombre, etc).

![image](https://github.com/miviru/ATPLaravel/assets/132077764/c6cd9294-526e-4303-ad47-6c4af4ce81d0)
Aquí podemos ver los torneos en los que ha participado un tenista y su botón para ver más datos del torneo.

![image](https://github.com/miviru/ATPLaravel/assets/132077764/388cc3ba-eb55-4c0b-b753-6a63e5509719)
Esta es la vista del index de los torneos. Al igual que la de tenistas, está paginado, con búsqueda por nombre, categoría, ubicación y demás. La vista del admin muestra distintos botones para poder borrar, eliminar, introducir participantes, ver más datos y la trajeta de crear torneo.

![image](https://github.com/miviru/ATPLaravel/assets/132077764/5ac01135-050a-4ff8-b85d-1ad4fc4e95c7)
Este es el formulario para crear un torneo. Cuenta con validaciones algunos campos y requisitos. Al igual que antes, existe un formulario para editarlo pero con todos los campos con opción a cambio.

![image](https://github.com/miviru/ATPLaravel/assets/132077764/1c82d557-9ad8-40c1-9012-a5a13b0e9b59)
Así se ven los datos del torneo, la imagen del torneo se pone de fondo y los datos a un lado.

![image](https://github.com/miviru/ATPLaravel/assets/132077764/e72bfd78-2b63-4b07-9fdd-21c3e73b47b3)
Esta es la lista de los tenistas que participan en ese torneo. El admin cuenta con distintos botones en los que puede eliminar el participante del torneo, sumarle puntos y ganancias en función de la posición en la que quede. El usuario únicamente puede ver los datos del tenista.

![image](https://github.com/miviru/ATPLaravel/assets/132077764/7b0d83b5-9c64-48ae-bd2d-f31591f23c6a)
Esta es la web para iniciar sesión.

![image](https://github.com/miviru/ATPLaravel/assets/132077764/f4012a97-342e-4bbf-94cb-9eccebd9feb7)
Y esta es la del registro de usuario.


## Contacto

Si tienen alguna duda, sugerencia este es mi correo de contacto => miguel.vicario@alumno.iesluisvives.org 

Muchas gracias!!

## Autor

Este proyecto ha sido desarrollado por Miguel Vicario Rubio, alumno de 2ºDAW del IES Luis Vives, Proyecto de la asignatura Desarrollo Web en entornos Servidor.

















