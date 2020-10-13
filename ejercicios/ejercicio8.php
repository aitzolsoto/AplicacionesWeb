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
  <h1>Ejercicio 8</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  <table>
    <tr>
      <td>
<?php
 
 $rojo = rand(0, 255);
 $verde = rand(0, 255);
 $azul = rand(0, 255);

 $circulos = rand(0, 9);
 
 for ($contador = 0; $contador <= $circulos; $contador++) {
     print '<p>
  <svg width="100" height="100">
     <circle cx="50" cy="50" r="50" fill="rgb('.$rojo.','.$verde.','.$azul.')" />
   </svg>
 </p>';
 }
?>
    </td>
  </tr>
</table>
   

  <footer>
    <p>Aitzol Soto</p>
  </footer>
</body>
</html>
