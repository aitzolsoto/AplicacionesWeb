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
  <h1>Ejercicio con formularios </h1>

  <form action="form_respuesta6.php" method="get">
  <label for="tamaño">Tamaño:</label>
    <p><input type="text" name="tamaño" ></p>

    <?php
  $forma = ["circulo","cuadrado"];
  for($contador = 0; $contador <= sizeof($forma)-1; $contador++ ){
   print "<p><input type='radio' name='forma' value=".$forma[$contador]."><label for='forma'>".$forma[$contador]."</label></p>";
   
  }
?>
  
 
  
    <p><input type="submit" name="enviar" value="Enviar"></p>
  </form>
 

  <footer>
    
  </footer>
</body>
</html>
