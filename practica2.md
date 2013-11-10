>Copyright 2013 Javier Collado

	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 

PRÁCTICA 2
==========


##APLICACIÓN DESARROLLADA

>Para esta practica la aplicación la hemos desarrollado sobre php. En este caso, nos encontramos con una interfaz similar a la usada en la práctica anterior (Para tener la posibilidad de poder unir todas en una sola aplicación). La aplicación actualmente cuenta con la funcionalidad basica de introducir el número de resistencias. Y el tipo de asociación entre ellas (Serie o Paralelo), permitiendo así calcular la resistencia equivalente. Importante: 

Un ejemplo de aplicación:
![resitenciaEq1](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/resistenciaEq1.png?raw=true "resitenciaEq1")
![resistenciaEq2](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/resistenciaEq2.png?raw=true "resitenciaEq2")
![resistenciaEq3](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/resistenciaEq3.png?raw=true "resitenciaEq3")

##CREACIÓN JAULA

>Para crear la jaula utilizamos el comando facilitado en la teoría:

	sudo debootstrap --arch=amd64 quantal /home/jaulas/quantal/	http://archive.ubuntu.com/ubuntu

>Esto nos creará una jaula con ubuntu sobre la que podemos trabajar en esta práctica.

>Una vez creada la jaula, tenemos que pasar a configurarla