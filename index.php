<!-- Copyright 2013 Javier Collado

	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. -->
    
<!doctype html> 
<html lang="es">
<head>
	<style type="text/css" media="screen">
  		@import 'estilo.css';
	</style>
<meta charset="utf­8">
	<title>Calcula la Resistencia Equivalente</title> 
</head>
<body>
	<div class="contenedor">
	<h1>Calcula la Resistencia Equivalente<br></h1>
	<img src="resistencia.gif">

	<form action="formulario_datos.php" method="post">
 	<br>
 	N&uacute;mero de resistencias:
 	<br>
	<input type="text" name="nResistencias" value="Introduce n&uacute;mero" />
	<br>
	&iquest;C&oacute;mo est&aacute;n las resistencias? &iquest;En serie o en paralelo?
	<br>
	<input type="radio" name="tipo" value="serie" checked="checked" /> Serie
	<br>
	<input type="radio" name="tipo" value="paralelo" /> Paralelo
	<br/>
 
  <input type="submit" value="Generar campos" />
</form>
	</div>
</body>
</html>
