<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de cadenas en PHP</title>
</head>
<body>
    <h1>Funciones útiles para trabajar con textos en PHP</h1>

    <h2>Función <code>substr()</code></h2>
    <p>Esta función permite extraer una porción de texto a partir de una posición específica.</p>
    <pre><code>
<?php
$frase = "Programar en PHP";
echo substr($frase, 10); // Resultado: PHP
?>
    </code></pre>

    <h2>Función <code>ord()</code></h2>
    <p>Devuelve el código numérico (ASCII) del primer carácter de una cadena de texto.</p>
    <pre><code>
<?php
echo ord("b"); // Resultado: 98
?>
    </code></pre>

    <h2>Función <code>printf()</code></h2>
    <p>Se utiliza para mostrar texto con formato, insertando variables dentro de una cadena.</p>
    <pre><code>
<?php
$usuario = "Camila";
$anio = 2025;
printf("Usuario: %s | Año actual: %d", $usuario, $anio);
?>
    </code></pre>

    <h2>Función <code>sprintf()</code></h2>
    <p>Es como <code>printf()</code>, pero en lugar de mostrar el resultado, lo guarda como texto en una variable.</p>
    <pre><code>
<?php
$producto = "laptop";
$valor = 799.5;
$mensaje = sprintf("El valor del producto %s es $%.2f", $producto, $valor);
echo $mensaje;
?>
    </code></pre>

    <h2>Función <code>strtolower()</code></h2>
    <p>Convierte todas las letras de una cadena a minúsculas.</p>
    <pre><code>
<?php
echo strtolower("BIENVENIDO AL CURSO"); // Resultado: bienvenido al curso
?>
    </code></pre>

    <h2>Función <code>strtoupper()</code></h2>
    <p>Pasa todas las letras de un texto a mayúsculas.</p>
    <pre><code>
<?php
echo strtoupper("php para principiantes"); // Resultado: PHP PARA PRINCIPIANTES
?>
    </code></pre>

    <h2>Función <code>ereg()</code> ⚠️</h2>
    <p><strong>Ya no se recomienda su uso porque está eliminada desde PHP 7.0.</strong><br>Antes servía para buscar coincidencias con patrones.</p>
    <pre><code>
<?php
// Código antiguo (ya no funciona):
// if (ereg("PHP", "Aprender PHP")) {
//     echo "Contiene PHP";
// }
?>
    </code></pre>
    <p><strong>Usa en su lugar:</strong> <code>preg_match()</code></p>

    <h2>Función <code>eregi()</code> ⚠️</h2>
    <p>Versión de <code>ereg()</code> que no diferencia entre mayúsculas y minúsculas, también obsoleta.</p>
    <pre><code>
<?php
// Código antiguo:
// if (eregi("php", "Aprender PHP")) {
//     echo "Coincidencia ignorando mayúsculas";
// }
?>
    </code></pre>
    <p><strong>Reemplazo recomendado:</strong> <code>preg_match('/php/i', 'Aprender PHP')</code></p>

</body>
</html>