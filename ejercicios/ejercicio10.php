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
  <h1>Ejercicio 10</h1>

  

 
<?php
 
 $rojo = rand(0, 255);
 $verde = rand(0, 255);
 $azul = rand(0, 255);
 $suma = 0;
 
 $imagen = ["1","2","3","4","5","6"];
 $dados = rand(0, 9);
 
 for ($contador = 0; $contador <= $dados; $contador++) {
     $dado1 = rand(0, 5);
     if($suma <= $dado1){
     $suma = ($dado1 + 1);
     }
     print "<img src=\"img/dados/$imagen[$dado1].svg\">\n";
 }

 print "<p>$suma</p>";
 
 


?>

   

  <footer>
    <p>Aitzol Soto</p>
  </footer>
</body>
</html>
