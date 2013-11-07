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
		<br>
	<?php 
		error_reporting(E_ALL);

		$numero=$_POST["nResistencias"];
		$tipo=$_POST["tipo"];

		class Formulario {
			private $_boton;
			private $_arch;
			private $_array=array();
			private $_arrayNames=array();

			public function __construct($archivo, $nombreBoton){
				$this->_boton=$nombreBoton;
				$this->_arch= $archivo;
			}
			
			public function insertarCampos($a, $name){
				array_push($this->_array, $a);
				array_push($this->_arrayNames, $name);
			}
			public function creaFormulario($num, $tip){
				echo '<form action="'.$this->_arch.'" method="post"> ';
				for($i=0 ; $i<count($this->_array) ; $i++){
					echo $this->_array[$i].':<br> <input name="'.$this->_arrayNames[$i].'" type="text" value="'.$this->_array[$i].'" /><br>';
				}
				echo'<input type="hidden" name="numeroR" value="'.$num.'">';
				echo'<input type="hidden" name="tipoAsoc" value="'.$tip.'">';
				echo '<input type="submit" id ="'.$this->_boton.'" value="'.$this->_boton.'"/>';
				echo '</form>';
			}
			

		}

		if(is_numeric($numero)){
			$nuevoForm=new Formulario("solucion.php", "Calcular");

			for ($i=0; $i < $numero; $i++) { 
				$nuevoForm->insertarCampos("Resistencia ".$i, "r".$i);
			}
			echo 'Hay '.$numero.' resistencias en '.$tipo;
			echo '<br>';
			echo 'Introducir solo n&uacute;meros. Todos en la misma unidad <br> Ej: 56';
			$nuevoForm->creaFormulario($numero, $tipo);
		}else{
			echo "No has introducido un numero en el campo N&uacute;mero de resistencias";
			echo '<a href="index.php">Volver atr&aacute;s</a>';
		}	


	?>

	</div>
</body>
</html>
