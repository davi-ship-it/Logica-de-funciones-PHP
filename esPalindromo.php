<?php
function esPalindromo($cadena) {
    // Remover espacios y signos de puntuación, y convertir a minúsculas
    $cadena = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $cadena));
    
    // Comparar la cadena con su reverso
    return $cadena === strrev($cadena);
}

// Prueba
$Palabra = readline("ingrese palabra: ");
echo esPalindromo($Palabra) ? "True\n" : "False\n";
?>
