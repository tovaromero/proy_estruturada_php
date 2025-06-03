<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes en PHP</title>
</head>
<body>
     <h1>Variables y constantes en PHP</h1
     <?php
      // Las variables se representan enteponiendo el simbolos a la palabra que se use como variable.
      // PIP es sensitive case.
      // Las variabiles ne pueden empezar con un número
      //En php no es necesario especificar el tipo de variable, pero si se debe saber cuándo utilizar las comillas, para el caso de variables de tipo cadena o string.
   
      // Asignamos a la variable a el valor 5
      $a = 5;

      // Asignamos a la variable bel valor 7 como cadena.
     b = "7";

     echo "<h2>Variables</h2>";

     // mostrar el valor de la variable a
     echo ($a);

     // mostrar el valor de la variable b
     echo ($b); 

     echo "<br>";

     echo "<h2>Constante</h2>";
     /el valor de una constante no cambia o se mantiene fijo durante la ejecucion de un pagina/
    
     /la forma de definir las constantes en php, es mediante el uso de la instruccion define/
    
     //creamos una constante llamada capital_colombia, cuyo valor es bogota
     define(constant_name: "capital_colombia",value: "bogota"); 
   ?>
<body>
</html>