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
  <h1>Ejercicio con formularios 9</h1>

  <form action="form_respuesta9.php" method="get">
    <p>
    <h3>Escribe un numero(0 < numero <= 100)</h3>
    <label for="numero">Numero: </label>
    <input type="text" id="numero1" name="numero">
    </p>
    <p><input type="submit" name="enviar" value="Enviar">
    <input type="button" onclick="borrar()" value="Borrar"></p>
  </form>

<script>
    function borrar() {
      document.getElementById("numero1").value = "";
    }
</script>

  <footer>
    
  </footer>
</body>
</html>
