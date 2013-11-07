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
		<h2>GRACIAS por utilizar nuestra aplicaci&oacute;n</h2>
		<?php 
			error_reporting(E_ALL);
			$numero=$_POST["numeroR"];
			$tipo=$_POST["tipoAsoc"];
			$arrayValores=array();
			$req=0;

			for ($i=0; $i < $numero ; $i++) { 
				array_push($arrayValores,$_POST["r".$i]);
			}

			function serie($array, $num, $req){
				for ($i=0; $i < $num; $i++) { 
					$req = $req + $array[$i];
				}
				echo "La resistencia equivalente es: ".$req;
			}
			function paralelo($array, $num, $req){
				for ($i=0; $i < $num; $i++) { 
					$req = $req + pow($array[$i], -1);
				}
				$req=pow($req, -1);

				echo "La resistencia equivalente es: ".$req;
			}

			if ($tipo == "serie") {
				serie($arrayValores, $numero, $req);
			}else{
				paralelo($arrayValores, $numero, $req);
			}


		?>
	</div>
</body>
</html>