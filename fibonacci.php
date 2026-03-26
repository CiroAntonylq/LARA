<?php
// =============================================
//  SERIE DE FIBONACCI
//  Rama: web1  |  Proyecto: MiAPELLIDO
//  F(n) = F(n-1) + F(n-2),  F(0)=0, F(1)=1
// =============================================

function fibonacci($n) {
    if ($n <= 0) return [0];
    if ($n === 1) return [0, 1];

    $serie = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }
    return $serie;
}

// Mostrar los primeros 10 términos (índices 0..9)
$terminos = 10;
$serie    = fibonacci($terminos - 1);

echo "========================================\n";
echo "        SERIE DE FIBONACCI\n";
echo "   F(n) = F(n-1) + F(n-2)\n";
echo "========================================\n";
echo "  Índice  |  Valor\n";
echo "----------+---------\n";

foreach ($serie as $indice => $valor) {
    printf("  F(%-2d)   |  %d\n", $indice, $valor);
}

echo "========================================\n";
echo "  Suma total de la serie: " . array_sum($serie) . "\n";
echo "========================================\n";

// Verificación con número áureo (φ ≈ 1.618...)
$ultimo = end($serie);
$prev   = prev($serie);
if ($prev > 0) {
    $phi = $ultimo / $prev;
    printf("  Razón áurea (F%d/F%d): %.6f\n", $terminos-1, $terminos-2, $phi);
    echo "  (φ ≈ 1.618033...)\n";
}

echo "========================================\n";
?>
