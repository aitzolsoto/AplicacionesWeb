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
   Ejercicio 1
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio 1</h1>

<?php


if($_REQUEST["ancho"] != "" && $_REQUEST["borde"] != "" && $_REQUEST["color"] != "" && is_numeric($_REQUEST["ancho"]) && is_numeric($_REQUEST["borde"])){
  $ancho = $_REQUEST["ancho"];
  $borde = $_REQUEST["borde"];
  $color = $_REQUEST["color"];
  print '<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
  width="335" height="169" viewBox="-10 -10 335 169" style="background-color: white;" font-family="sans-serif">
  <rect x="0" y="0" width="'.$ancho.'px" height="'.$borde.'px" fill="'.$color.'" style="stroke-width:3;stroke:rgb(0,0,0)"/>
  </svg>';
  
}
else{
  print "<p>Faltan valores</p>";
}








?>

  <p><a href="form1.php">Volver al formulario.</a></p>

  <footer>
   
  </footer>
</body>
</html>
