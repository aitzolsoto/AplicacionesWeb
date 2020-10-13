<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author Aitzol
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Aitzol Soto
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejercicio 12</h1>

  

 
<?php

$animal = ["ballena", "caballito-mar", "camello", "cebra", "elefante", "hipopotamo", "jirafa", "leon","leopardo","medusa","mono","oso","oso-blanco","pajaro","pinguino","rinoceronte","serpiente","tigre","tortuga","tortuga-marina"];
$numero = rand(0,19);

print "<img src=\"img/animales/$animal[$numero].svg\">";

?>

   

  <footer>
    <p>Aitzol Soto</p>
  </footer>
</body>
</html>
