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
  <h1>Ejercicio 4</h1>

<?php


if($_REQUEST["nombre"] != "" && $_REQUEST["apellido"] != ""){
  $nombre = $_REQUEST["nombre"];
  $apellido = $_REQUEST["apellido"];
 print"<p>Nombre: ".$nombre."</p>";
 print"<p>Apellido: ".$apellido."</p>";
  
}else{
  if($_REQUEST["nombre"] == ""){
    print "<h4>No has introducido ningun nombre</h4>";
  }

  if($_REQUEST["apellido"] == ""){
    print "<h4>No has introducido ningun apellido</h4>";
  }
  
}


?>

  <p><a href="form4.php">Volver al formulario.</a></p>

  <footer>
   
  </footer>
</body>
</html>
