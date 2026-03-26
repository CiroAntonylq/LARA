<?php
// =============================================
//  MULTIPLICACIÓN DE DOS NÚMEROS
//  Proyecto: MiAPELLIDO
// =============================================

function multiplicar($a, $b) {
    return $a * $b;
}

// Tabla de pares a multiplicar
$pares = [
    [7,  8],
    [12, 5],
    [3,  9],
    [15, 4],
];

echo "========================================\n";
echo "   MULTIPLICACIÓN DE DOS NÚMEROS\n";
echo "========================================\n";
echo "  Núm1  x  Núm2  =  Resultado\n";
echo "----------------------------------------\n";

foreach ($pares as $par) {
    [$a, $b] = $par;
    $res = multiplicar($a, $b);
    printf("  %-5d x  %-5d =  %d\n", $a, $b, $res);
}

echo "========================================\n";
?>
