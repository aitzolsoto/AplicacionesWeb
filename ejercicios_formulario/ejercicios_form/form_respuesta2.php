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
  <h1>Ejercicio 2</h1>

<?php

if(isset($_REQUEST["frutas"])){
  $frutas = $_REQUEST["frutas"];
  print "<img src=\"img/frutas/$frutas.svg\" width='100px'>";
  
  
}else{
  print "<p>No has seleccionado nada</p>";
}



?>

  <p><a href="form2.php">Volver al formulario.</a></p>

  <footer>
   
  </footer>
</body>
</html>
