<?php
// Função para verificar a possibilidade de desconto
function verificarDesconto($valorCompra) {
    if ($valorCompra >= 100.00) {
        $desconto = 0.10 * $valorCompra; // 10% de desconto
        $valorComDesconto = $valorCompra - $desconto;
    } else {
        $valorComDesconto = $valorCompra;
    }

    return $valorComDesconto;
}

// Valor da compra
$valorCompra = 120.00;

// Chame a função para verificar o desconto
$valorFinal = verificarDesconto($valorCompra);

// Exiba os valores
echo "Valor inicial da compra: R$ $valorCompra<br>";
echo "Valor final com desconto: R$ $valorFinal<br>";
?>
