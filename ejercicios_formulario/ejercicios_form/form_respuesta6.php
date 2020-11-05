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
  <h1>Ejercicio 6</h1>

<?php
print "<pre>"; print_r($_REQUEST); print "</pre>\n";



if($_REQUEST["tamaño"] != ""  && isset($_REQUEST["forma"]) && is_numeric($_REQUEST["tamaño"])){
    $tamaño = $_REQUEST["tamaño"];
    $forma = $_REQUEST["forma"];
    if($forma == "circulo"){
      print '<svg height="600px" width="600px">
      <circle cx="'.$tamaño.'" cy="'.$tamaño.'" r="'.$tamaño.'" stroke="black" stroke-width="3" fill="red"/>
       
    </svg> ';
    } else if ($forma == "cuadrado"){
      print '<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
      width="335" height="169" viewBox="-10 -10 335 169" style="background-color: white;" font-family="sans-serif">
      <rect x="0" y="0" width="'.$tamaño.'px" height="'.$tamaño.'px" fill="red" style="stroke-width:3;stroke:rgb(0,0,0)"/>
      </svg>';
    }
}else{
  print "<p>La dirección de correo no es valida</p>";
 
  
}


?>

  <p><a href="form6.php">Volver al formulario.</a></p>

  <footer>
   
  </footer>
</body>
</html>
