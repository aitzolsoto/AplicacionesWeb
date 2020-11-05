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
  <h1>Ejercicio 7</h1>

<?php
print "<pre>"; print_r($_REQUEST); print "</pre>\n";



if($_REQUEST["nombre"] != ""  && $_REQUEST["apellidos"] != "" &&  is_numeric($_REQUEST["peso"]) && isset($_REQUEST["sexo"]) && isset($_REQUEST["estado"]) && $_REQUEST["edad"] != 0){
    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellidos"];
    $edad = $_REQUEST["edad"];
    $peso = $_REQUEST["peso"];
    $sexo = $_REQUEST["sexo"];
    $estado = $_REQUEST["estado"];
    

    print "<p>Nombre: ".$nombre."</p>";

    print "<p>Apellido: ".$apellido."</p>";
    
    print "<p>Edad: ".$edad."</p>";

    print "<p>Peso: ".$peso."</p>";

    print "<p>Sexo: ".$sexo."</p>";

    print "<p>Estado: ".$estado."</p>";
    
    print "<p>Aficiones:</p>";
    if(isset($_REQUEST["cine"])){
      print "<p>Cine</p>";
    }

    if(isset($_REQUEST["literatura"])){
      print "<p>Literatura</p>";
    }

    if(isset($_REQUEST["tebeos"])){
      print "<p>Tebeos</p>";
    }

    if(isset($_REQUEST["deporte"])){
      print "<p>Deporte</p>";
    }

    if(isset($_REQUEST["musica"])){
      print "<p>Musica</p>";
    }

    if(isset($_REQUEST["television"])){
      print "<p>Television</p>";
    }
}else{
  print "<p>La dirección de correo no es valida</p>";
 
  
}


?>

  <p><a href="form7.php">Volver al formulario.</a></p>

  <footer>
   
  </footer>
</body>
</html>
