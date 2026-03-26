<?php
// =============================================
//  SUMA DE CUADRADOS  (N = 5)
//  Fórmula: 1² + 2² + 3² + ... + N²
//  Proyecto: MiAPELLIDO
// =============================================

function sumaCuadrados($n) {
    $suma = 0;
    $detalle = [];

    for ($i = 1; $i <= $n; $i++) {
        $cuadrado = $i * $i;
        $suma += $cuadrado;
        $detalle[] = $i . "² = " . $cuadrado;
    }

    return ["suma" => $suma, "detalle" => $detalle];
}

$N = 5;
$resultado = sumaCuadrados($N);

echo "========================================\n";
echo "   SUMA DE CUADRADOS  (N = $N)\n";
echo "========================================\n";

foreach ($resultado["detalle"] as $linea) {
    echo "  " . $linea . "\n";
}

echo "----------------------------------------\n";
echo "  Total: " . $resultado["suma"] . "\n";
echo "  Fórmula directa: N(N+1)(2N+1)/6 = ";
echo ($N * ($N + 1) * (2 * $N + 1)) / 6 . "\n";
echo "========================================\n";
?>
