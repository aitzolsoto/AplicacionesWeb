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
  <h1>Ejercicio 5</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  
<?php
  $carta1 = rand(0, 9);
  $carta2 = rand(0, 9);
  $carta3 = rand(0, 9);

  $imagen = ["c1","c2","c3","c4","c5","c6","c7","c8","c9","c10"];

  print "<img src=\"img/cartas/$imagen[$carta1].svg\">\n";

  print "<img src=\"img/cartas/$imagen[$carta2].svg\"\n>";

  print "<img src=\"img/cartas/$imagen[$carta3].svg\">";

  if ($carta1 >= $carta2 && $carta1 >= $carta3) {
      print "<p>La carta mas alta es:</p>";
      print "<img src=\"img/cartas/$imagen[$carta1].svg\">\n";
  } elseif ($carta2 >= $carta1 && $carta2 >= $carta3) {
      print "<p>La carta mas alta es:</p>";
      print "<img src=\"img/cartas/$imagen[$carta2].svg\">\n";
  } elseif ($carta3 >= $carta1 && $carta3 >= $carta2) {
      print "<p>La carta mas alta es:</p>";
      print "<img src=\"img/cartas/$imagen[$carta3].svg\">\n";
  }

?>
   

  <footer>
    <p>Aitzol Soto</p>
  </footer>
</body>
</html>
