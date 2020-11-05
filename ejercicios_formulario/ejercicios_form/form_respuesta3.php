<?php
/**
 * Controles en formularios
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios 
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio 3</h1>

<?php


if(isset($_REQUEST["fondo"]) && isset($_REQUEST["letra"])){
  $fondo = $_REQUEST["fondo"];
  $letra = $_REQUEST["letra"];
  print "<p style='color:".$letra.";'>La Segunda Guerra Mundial fue un conflicto militar global que se desarrolló entre 1939 y 1945. 
  En ella se vieron implicadas la mayor parte de las naciones del mundo, incluidas todas las grandes potencias, agrupadas en dos alianzas militares 
  enfrentadas: los aliados de la Segunda Guerra Mundial y las potencias del eje. Fue la mayor contienda bélica de la historia, con más de cien millones 
  de militares movilizados y un estado de «guerra total» en que los grandes contendientes destinaron toda su capacidad económica, militar y científica al 
  servicio del esfuerzo bélico, borrando la distinción entre recursos civiles y militares. Marcada por hechos de enorme repercusión que incluyeron la muerte 
  masiva de civiles -el Holocausto, los bombardeos intensivos sobre ciudades y el uso, por única vez, de armas nucleares en un conflicto militar- la Segunda 
  Guerra Mundial fue la más mortífera de la historia con un resultado de entre 50 y 70 millones de víctimas, el 2,5 % de la población mundial.</p>";
  print "<body style=background-color:".$fondo.">";
  
  
}else{
  print "<p>No has seleccionado nada</p>";
}


?>

  <p><a href="form3.php">Volver al formulario.</a></p>

  <footer>
   
  </footer>
</body>
</html>
