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

</style>
</head>

<body>
  <h1>Ejercicio con formularios 7</h1>

  <form action="form_respuesta7.php" method="get">
 
    <p>
    <h4>
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre">
      <label for="apellidos">Apellidos:</label>
      <input type="text" name="apellidos" placeholder="Apellidos">
      <label for="edad">Edad:</label>     
      <?php
        print'<select name="edad">';
        for($contador = 0; $contador <= 200; $contador++ ){
        print "<option>".$contador."</option>";
        
        }
        print '</select>';
      ?>
     </h4>
    </p>

    
    <h4>
      <label for="peso">Peso:</label>
      <input type="text" name="peso" placeholder="Peso"> 
      kg  
    </h4>
    <h4>
      <label for="sexo">Sexo:</label>
    </h4>
      <?php
        $sexo = ["Hombre","Mujer"];
        for($contador = 0; $contador <= sizeof($sexo)-1; $contador++ ){
        print "<input type='radio' name='sexo' value=".$sexo[$contador]."><label for='sexo'>".$sexo[$contador]."</label>";
        
        }
      ?>
      
      <h4>
        <label for="estado">Estado:</label>
      </h4>
        <?php
          $estado = ["Soltero","Casado","Otros"];
          for($contador = 0; $contador <= sizeof($estado)-1; $contador++ ){
          print "<input type='radio' name='estado' value=".$estado[$contador]."><label for='estado'>".$estado[$contador]."</label>";
          
          }
        ?>
      
    

    
    <h4>
      <label for="aficiones">Aficiones:</label>
    </h4>
    <p>       
      <input type="checkbox" name="cine">
      <label for="cine">Cine</label>

      <input type="checkbox" name="literatura">
      <label for="literatura">Literatura</label>

      <input type="checkbox" name="tebeos">
      <label for="tebeos">Tebeos</label>
    
      <input type="checkbox" name="deporte">
      <label for="deporte">Deporte</label>

      <input type="checkbox" name="musica">
      <label for="musica">Musica</label>

      <input type="checkbox" name="television">
      <label for="television">Television</label>
      </p>
 
  
    <p><input type="submit" name="enviar" value="Enviar"></p>
  </form>
 

  <footer>
    
  </footer>
</body>
</html>
