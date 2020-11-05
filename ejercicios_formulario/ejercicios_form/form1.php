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

  <form action="form_respuesta1.php" method="get">
    <!-- Añade aquí los elementos de formulario necesarios -->
    <label for="ancho">Tamaño:</label>
    <input type="text" name="ancho" placeholder="Ancho"><br><br>

    <label for="borde">Grosor:</label>
    <input type="text" name="borde" placeholder="Borde"><br><br>

    <label for="color">Color:  </label>

    <select name="color" id="color">
      <option value="red">Rojo</option>
      <option value="green">Verde</option>
      <option value="blue">Azul</option>
      <option value="black">Negro</option>
    </select><br><br>

    <input type="submit" name="submit">
  </form>

  <footer>
    
  </footer>
</body>
</html>
