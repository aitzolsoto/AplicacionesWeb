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
  <h1>Ejercicio 11</h1>

  

 
<?php
  $pares = 0;
  $impares = 0;
 
 
 $dados = rand(0, 9);
 
 for ($contador = 0; $contador <= $dados; $contador++) {
    $imagen = rand(1,6);
  
     if($imagen == 2 || $imagen == 4 || $imagen == 6){
        $pares = $pares + 1;
     }

     if($imagen == 1 || $imagen == 3 || $imagen == 5){
      $impares = $impares + 1;
     }
     print "<img src=\"img/dados/$imagen.svg\">\n";
 }

 print "<p>Pares: $pares</p>";
 
 print "<p>Impares: $impares</p>";


?>

   

  <footer>
    <p>Aitzol Soto</p>
  </footer>
</body>
</html>
