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

  <style>
  table, th, td {
  border: 1px solid black;
}
  </style>
</head>

<body>
  <h1>Ejercicio 9</h1>

<?php



if($_REQUEST["numero"] != "" && is_numeric($_REQUEST["numero"]) && $_REQUEST["numero"] > 0 && $_REQUEST["numero"] <= 100){
  $numero = $_REQUEST["numero"];
  print '<table>
  ';
    for($f = 1; $f <= $numero; $f++){ 
      print "<tr>";
      for($c = 1;$c<= $numero;$c++){
        $valor = $f * $c;
        print "<td>".$valor."</td>";
      }
      print "</tr>";
    }
  print "</table>";

}else{
  print "<p>Debes introducir un valor<p>";
 
  
}


?>

  <p><a href="form9.php">Volver al formulario.</a></p>

  <footer>
   
  </footer>
</body>
</html>
