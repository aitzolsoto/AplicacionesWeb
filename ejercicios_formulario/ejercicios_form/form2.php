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
  <h1>Ejercicio con formularios X</h1>

  <form action="form_respuesta2.php" method="get">
  <p>Frutas:</p>
        
<?php
  $frutas = ["cerezas","fresa","limon","manzana","naranja","pera"];
  for($contador = 0; $contador <= sizeof($frutas)-1; $contador++ ){
   print "<p><input type='radio' name='frutas' value=".$frutas[$contador]."><label for='frutas'>".$frutas[$contador]."</label></p>";
   
  }
?>
<p><input type="submit" name="enviar" value="Enviar"></p>
  </form>

  
  

  <footer>
    
  </footer>
</body>
</html>
