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
    Ejercicio 10
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio 10</h1>

<?php


$jugadores = $_REQUEST["jugadores"];

if($jugadores >= 3 && $jugadores <= 10 && is_numeric($jugadores) && $jugadores != ""){
  $resultado_max = 0;
    for($contador = 1; $contador <= $jugadores;$contador++){
        $carta1 = rand(1,10);
        $carta2 = rand(1,10);
        $carta3 = rand(1,10);
        

        $resultado = $carta1 + $carta2 + $carta3;
        if($resultado_max < $resultado){
          $resultado_max = $resultado;
        }

        print'<h4>Jugador '.$contador.': <img src=\'img/cartas/c'.$carta1.'.svg\' width="100px"> <img src=\'img/cartas/c'.$carta2.'.svg\' width="100px"> <img src=\'img/cartas/c'.$carta3.'.svg\' width="100px"> Resultado = '.$resultado.' </h4>';
        

    }
  print "<h2>Resultado maximo:".$resultado_max."</h2>";
}else{
  print "<p>Debes introducir un valor<p>";
 
  
}


?>

  <p><a href="form10.php">Volver al formulario.</a></p>

  <footer>
   
  </footer>
</body>
</html>
