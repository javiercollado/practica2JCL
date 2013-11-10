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

>Para esta práctica la aplicación la hemos desarrollado sobre php. En este caso, nos encontramos con una interfaz similar a la usada en la práctica anterior (Para tener la posibilidad de poder unir todas en una sola aplicación). La aplicación actualmente cuenta con la funcionalidad básica de introducir el número de resistencias. Y el tipo de asociación entre ellas (Serie o Paralelo), permitiendo así calcular la resistencia equivalente. Importante: 

Un ejemplo de aplicación:
![resitenciaEq1](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/resistenciaEq1.png?raw=true "resitenciaEq1")
![resistenciaEq2](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/resistenciaEq2.png?raw=true "resitenciaEq2")
![resistenciaEq3](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/resistenciaEq3.png?raw=true "resitenciaEq3")

##CREACIÓN JAULA

>Para crear la jaula utilizamos el comando facilitado en la teoría:  

	sudo debootstrap --arch=amd64 quantal /home/jaulas/quantal/	http://archive.ubuntu.com/ubuntu

![debootstrap](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/Crear%20Jaula.png?raw=true "debootstrap")  

>Esto nos creará una jaula con base ubuntu sobre la que podemos trabajar en esta práctica.  

>Aquí podemos ver como se ha creado la jaula correctamente. 
![OK](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/instalado%20correctamente.png?raw=true "OK")  

>A continuación podemos crear un usuario dentro de la jaula de manera que podamos usarlo como administrador de esta jaula.
>Creamos el usuario y realizamos diversas operaciones sobre este, para luego poder usarlo mediante ssh.

![user1](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/Add%20user%201.png?raw=true "user1")  

![user2](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/Add%20user%202.png?raw=true "user2")  

![user3](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/Add%20user%203.png?raw=true "user3")  

![user4](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/Acceso%20SSH.png?raw=true "user4")  

>Una vez creada la jaula y teniendo el usuario ya podemos instalar lo que necesitamos (O bien desde ssh con nuestro usuario o haciendo chroot a nuestra jaula).
>Nuestra aplicación necesitará para funcionar los siguientes componentes:  

> - Servidor web Apache.  
> - PHP.  


>Así que usaremos los siguientes comandos para la correspondiente instalación.

    sudo apt-get install apache2 -y
    
    sudo apt-get install php5 libapache2-mod-php5 -y

>Y reiniciamos apache:

    sudo /etc/init.d/apache2 restart

>Finalmente, ya podemos mover nuestra aplicación a la jaula para poder verla en funcionamiento.

![Mover](https://github.com/javiercollado/practica2JCL/blob/master/ImagenesDocumento/mover%20aplicacion%20a%20jaula.png?raw=true "mover")  