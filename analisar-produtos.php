<?php
// Lista de produtos com nome e preço
$produtos = array(
    array("nome" => "Produto 1", "preco" => 19.99),
    array("nome" => "Produto 2", "preco" => 29.99),
    array("nome" => "Produto 3", "preco" => 9.99),
    array("nome" => "Produto 4", "preco" => 14.99)
);

// Função para encontrar o produto mais caro e o mais barato
function encontrarProdutosExtremos($produtos) {
    $produtoMaisCaro = null;
    $produtoMaisBarato = null;

    foreach ($produtos as $produto) {
        if ($produtoMaisCaro === null || $produto['preco'] > $produtoMaisCaro['preco']) {
            $produtoMaisCaro = $produto;
        }
        
        if ($produtoMaisBarato === null || $produto['preco'] < $produtoMaisBarato['preco']) {
            $produtoMaisBarato = $produto;
        }
    }

    return array("maisCaro" => $produtoMaisCaro, "maisBarato" => $produtoMaisBarato);
}

// Chame a função para encontrar os produtos mais caros e mais baratos
$resultados = encontrarProdutosExtremos($produtos);

// Exiba os resultados
echo "Produto mais caro: {$resultados['maisCaro']['nome']} - R$ {$resultados['maisCaro']['preco']}<br>";
echo "Produto mais barato: {$resultados['maisBarato']['nome']} - R$ {$resultados['maisBarato']['preco']}<br>";
?>
