<!DOCTYPE html>
<html>
<head>
	<title>Arreglo 2.15</title>
	<style type="text/css">
		body{
			background-color: whitesmoke;
			font-family: arial;
			font-size: 20px;
			text-align: left;
		}
	</style>
</head>
<body>
	<?php
//Crea un arreglo en subline que contenga 5 alumnos con sus respectivas calificaciones. Imprime:  La calificacion de Alumno es Calificacion. ejemplo: la calificación de Juan es 8. Ordena el arreglo. Vuelve a imprimir
	$alumnos = array("Said" => "10", "Yael" => "9", "Antonio"=> "7", "Carlos" => "8", "Angel"=> "6" );
	foreach ($alumnos as $alumno => $calificacion) {
	echo "La calificación de $alumno es de: $calificacion";
	echo "<br>";
}

echo "<p>";
//Ordena los elementos de un array con parametros asociativos (mas de dos elementos), para que sea de manera desendente usa "resort".
arsort ($alumnos);
	foreach ($alumnos as $alumno => $calificacion) {
	echo "La calificación de $alumno es de: $calificacion";
	echo "<br>";
}



	?>

</body>
</html>