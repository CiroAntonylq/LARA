<?php
// =============================================
//  FACTORIAL DE UN NÚMERO
//  Proyecto: MiAPELLIDO
// =============================================

function factorial($n) {
    if ($n < 0) {
        return "Error: No existe factorial de números negativos.";
    }
    if ($n === 0 || $n === 1) {
        return 1;
    }
    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

function mostrarPasos($n) {
    if ($n <= 1) return "$n! = 1";
    $pasos = [];
    for ($i = $n; $i >= 1; $i--) {
        $pasos[] = $i;
    }
    return $n . "! = " . implode(" x ", $pasos) . " = " . factorial($n);
}

// Valores de prueba
$numeros = [0, 1, 5, 7, 10];

echo "========================================\n";
echo "       FACTORIAL DE UN NÚMERO\n";
echo "========================================\n";

foreach ($numeros as $num) {
    echo "  " . mostrarPasos($num) . "\n";
}

echo "========================================\n";
?>
