# Proyecto Programación para Internet
## Descripción
Esta aplicación web fue diseñada para la materia de Programación para Internet. Se usó Laravel como Framework para el desarrollo del sistema.

En general se buscó crear un prototipo similar a https://www.last.fm/ (de ahí el nombre de first.fm). Esta aplicación web guarda canciones, las cuales pertenecen a un álbum y a su vez son creadas por artistas. En general está organizado de la siguiente forma:

* Artista
  * Álbum
    * Canción
    * Canción
  * Álbum
    * Canción
* Artista
  * Álbum
    * Canción
    * Canción
    * Canción

El sistema cuenta con 2 usuarios: el usuario general y el administrador. Para cada tipo de usuario se desarrolló un Middleware.

*Usuario general: Puede navegar por el sistema buscando canciones, álbumes y artistas. Puede ver los Álbumes que tiene un artista y las canciones que tiene un Álbum. Además, este usuario cuenta con la capacidad de comentar las canciones, álbumes y artistas.
*Administrador: Es el encargado de dar de alta, editar y eliminar las canciones, álbumes y artistas.

## Instalación del Sistema
1. Descargar he instalar [Laragon](https://laragon.org/)
1. Colocar el proyecto en la carpeta www de laragon. Ejemplo: en el caso de tenerlo en la raiz de C:\laragon\www\
1. Abrir la aplicación de Laragon y dar en el boton de play para ejecutar Laravel.

El último  paso se debe de ejecutar cada vez que el servidor sea reiniciado.

## Imágenes del Sistema
![Usuario](/img02.png)
