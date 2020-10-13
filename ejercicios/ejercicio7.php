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
    Ejercicio 7
    Aitzol Soto
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejercicio 7</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  
<?php
  $dado11 =rand(0,5);
  $dado12 =rand(0,5);
  $dado13 = rand(0,5);

  $dado21 = rand(0,5);
  $dado22 = rand(0,5);
  $dado23 =rand(0,5);

  $imagen = ["1","2","3","4","5","6"];

  $suma_jugador1 = $dado11 + $dado12 + $dado13;
  $suma_jugador2 = $dado21 + $dado22 + $dado23;

  $pareja1 = 0;
  $pareja2 = 0;
  

 /**Jugador 1 */

 print "<h2>Jugador 1</h2>";
 print "<img src=\"img/dados/$imagen[$dado11].svg\">\n";
 print "<img src=\"img/dados/$imagen[$dado12].svg\">\n";
 print "<img src=\"img/dados/$imagen[$dado13].svg\">\n";

 print "<h2>Jugador 2</h2>";
 print "<img src=\"img/dados/$imagen[$dado21].svg\">\n";
 print "<img src=\"img/dados/$imagen[$dado22].svg\">\n";
 print "<img src=\"img/dados/$imagen[$dado23].svg\">\n";

/**Trio de dados igual */
if ($dado11 == $dado12 && $dado11 == $dado13 & $dado21 == $dado22 && $dado21 == $dado23) {
    if ($suma_jugador1 > $suma_jugador2) {
        print "<h2>Gana jugador 1</h2>";
    } else if ($suma_jugador2 > $suma_jugador1) {
        print "<h2>Gana jugador 2</h2>";
    } else {
        print "<h2>Empate</h2>";
    }
    /**Un trio igual y otro diferente */
}else if ($dado11 == $dado12 && $dado11 == $dado13  || $dado21 == $dado22 && $dado21 == $dado23) {
    if ($dado11 == $dado12 && $dado11 == $dado13) {
        print "<h2>Gana jugador 1</h2>";
    } else if ($dado21 == $dado22 && $dado21 == $dado23) {
        print "<h2>Gana jugador 2</h2>";
    } else {
      
    }
    /**Pareja */
}else if ($dado11 == $dado12 && $dado11 != $dado13 || $dado11 == $dado13 && $dado11 != $dado12 || $dado12 == $dado13 && $dado12 != $dado11){
    if ($dado21 == $dado22 && $dado21 != $dado23 || $dado21 == $dado23 && $dado21 != $dado22 || $dado22 == $dado23 && $dado22 != $dado21) {
        /**Dado 11 y 12 */
        if ($dado11 == $dado12) {
            if ($dado21 == $dado22) {
                $pareja1 = $dado11 + $dado12;
                $pareja2 = $dado21 + $dado22;
                /**Parejas iguales */
                if($pareja1 == $pareja2){
                  $pareja1 = $pareja1 + $dado13;
                  $pareja2 = $pareja2 + $dado23;
                  if($pareja1 > $pareja2){
                    print "<h2>Gana jugador 1</h2>";
                  }else if($pareja1 < $pareja2){
                    print "<h2>Gana jugador 2</h2>";
                  }else{
                    print "<h2>Empate</h2>";
                  }
                  /**Parejas distintas */
                }else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            } else if ($dado21 == $dado23) {
                $pareja1 = $dado11 + $dado12;
                $pareja2 = $dado21 + $dado23;
                /**Parejas iguales */
                if ($pareja1 == $pareja2) {
                    $pareja1 = $pareja1 + $dado13;
                    $pareja2 = $pareja2 + $dado22;
                    if ($pareja1 > $pareja2) {
                        print "<h2>Gana jugador 1</h2>";
                    } elseif ($pareja1 < $pareja2) {
                        print "<h2>Gana jugador 2</h2>";
                    } else {
                        print "<h2>Empate</h2>";
                    }
                    /**Parejas distintas */
                }else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            } elseif ($dado22 == $dado23) {
                $pareja1 = $dado11 + $dado12;
                $pareja2 = $dado22 + $dado23;
                /**Parejas iguales */
                if($pareja1 == $pareja2){
                  $pareja1 = $pareja1 + $dado13;
                  $pareja2 = $pareja2 + $dado21;
                  if($pareja1 > $pareja2){
                    print "<h2>Gana jugador 1</h2>";
                  }else if($pareja1 < $pareja2){
                    print "<h2>Gana jugador 2</h2>";
                  }else{
                    print "<h2>Empate</h2>";
                  }
                  /**Parejas distintas */
                } else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            }
            /**Dado 11 y 13 */
        } else if ($dado11 == $dado13) {
            if ($dado21 == $dado22) {
                $pareja1 = $dado11 + $dado13;
                $pareja2 = $dado21 + $dado22;
                /**Parejas iguales */
                if($pareja1 == $pareja2){
                  $pareja1 = $pareja1 + $dado12;
                  $pareja2 = $pareja2 + $dado23;
                  if($pareja1 > $pareja2){
                    print "<h2>Gana jugador 1</h2>";
                  }else if($pareja1 < $pareja2){
                    print "<h2>Gana jugador 2</h2>";
                  }else{
                    print "<h2>Empate</h2>";
                  }
                  /**Parejas distintas */
                } else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            } else if ($dado21 == $dado23) {
                $pareja1 = $dado11 + $dado13;
                $pareja2 = $dado21 + $dado23;
                /**Parejas iguales */
                if($pareja1 == $pareja2){
                  $pareja1 = $pareja1 + $dado12;
                  $pareja2 = $pareja2 + $dado22;
                  if($pareja1 > $pareja2){
                    print "<h2>Gana jugador 1</h2>";
                  }else if($pareja1 < $pareja2){
                    print "<h2>Gana jugador 2</h2>";
                  }else{
                    print "<h2>Empate</h2>";
                  }
                  /**Parejas distintas */
                } else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            } else if ($dado22 == $dado23) {
                $pareja1 = $dado11 + $dado13;
                $pareja2 = $dado22 + $dado23;
                /**Parejas iguales */
                if($pareja1 == $pareja2){
                  $pareja1 = $pareja1 + $dado12;
                  $pareja2 = $pareja2 + $dado21;
                  if($pareja1 > $pareja2){
                    print "<h2>Gana jugador 1</h2>";
                  }else if($pareja1 < $pareja2){
                    print "<h2>Gana jugador 2</h2>";
                  }else{
                    print "<h2>Empate</h2>";
                  }
                  /**Parejas distintas */
                } else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            }
            /**Dado 12 y 13 */
        } else if ($dado12 == $dado13) {
            if ($dado21 == $dado22) {
                $pareja1 = $dado12 + $dado13;
                $pareja2 = $dado21 + $dado22;
                 /**Parejas iguales */
                 if ($pareja1 == $pareja2) {
                  $pareja1 = $pareja1 + $dado11;
                  $pareja2 = $pareja2 + $dado23;
                  if ($pareja1 > $pareja2) {
                      print "<h2>Gana jugador 1</h2>";
                  } elseif ($pareja1 < $pareja2) {
                      print "<h2>Gana jugador 2</h2>";
                  } else {
                      print "<h2>Empate</h2>";
                  }
                  /**Parejas distintas */
              }else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            } else if ($dado21 == $dado23) {
                $pareja1 = $dado12 + $dado13;
                $pareja2 = $dado21 + $dado23;
                 /**Parejas iguales */
                 if ($pareja1 == $pareja2) {
                  $pareja1 = $pareja1 + $dado11;
                  $pareja2 = $pareja2 + $dado22;
                  if ($pareja1 > $pareja2) {
                      print "<h2>Gana jugador 1</h2>";
                  } else if ($pareja1 < $pareja2) {
                      print "<h2>Gana jugador 2</h2>";
                  } else {
                      print "<h2>Empate</h2>";
                  }
                  /**Parejas distintas */
              }else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            } else if ($dado22 == $dado23) {
                $pareja1 = $dado12 + $dado13;
                $pareja2 = $dado21 + $dado23;
                if ($pareja1 == $pareja2) {
                  $pareja1 = $pareja1 + $dado11;
                  $pareja2 = $pareja2 + $dado22;
                  if ($pareja1 > $pareja2) {
                      print "<h2>Gana jugador 1</h2>";
                  } else if ($pareja1 < $pareja2) {
                      print "<h2>Gana jugador 2</h2>";
                  } else {
                      print "<h2>Empate</h2>";
                  }
                  /**Parejas distintas */
              }else if ($pareja1 > $pareja2) {
                    print "<h2>Gana jugador 1</h2>";
                } else {
                    print "<h2>Gana jugador 2</h2>";
                }
            }
        } 
        /**Pareja jugador 1 y jugador 2 sin pareja */
    }else if($dado21 != $dado22 && $dado21 != $dado23 && $dado22 != $dado23){
      print "<h2>Gana jugador 1</h2>";
    }
/**Pareja jugador 2 y jugador 1 sin pareja */
} else if(($dado21 == $dado22 && $dado21 != $dado23 || $dado21 == $dado23 && $dado21 != $dado22 || $dado22 == $dado23 && $dado22 != $dado21)){
  if($dado11 != $dado12 && $dado11 != $dado13 && $dado12 != $dado13){
    print "<h2>Gana jugador 2</h2>";
  }
  /**Juagdor1 y jugador 2 dados distintos */
} else if($dado11 != $dado12 && $dado11 != $dado13 && $dado12 != $dado13){
  if($dado21 != $dado22 && $dado21 != $dado23 && $dado22 != $dado23){
    $pareja1 = $dado11 + $dado12 + $dado13;
    $pareja2 = $dado21 + $dado22 + $dado23;
    if($pareja1 > $pareja2){
      print "<h2>Gana jugador 1</h2>";
    }else if($pareja1 < $pareja2){
      print "<h2>Gana jugador 2</h2>";
    }else {
      print "<h2>Empate</h2>";
    }
  }
}


 


?>
   

  <footer>
    <p>Aitzol Soto</p>
  </footer>
</body>
</html>
