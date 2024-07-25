<?php
function sumaDigitos($numero) {
    $suma = 0;
    while ($numero != 0) {
        $suma += $numero % 10;
        $numero = intval($numero / 10);
    }
    return $suma;
}

// Prueba
echo sumaDigitos(1234) . "\n";
?>
