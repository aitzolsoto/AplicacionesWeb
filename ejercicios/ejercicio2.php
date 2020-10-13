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
  <h1>Ejercicio 2</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  
<?php

$R = rand(0, 255);
$G= rand(0, 255);
$B = rand(0, 255);

print "<p>RGB($R, $G, $B)</p>";




?>
   

  <footer>
    <p>Aitzol Soto</p>
  </footer>
</body>
</html>
