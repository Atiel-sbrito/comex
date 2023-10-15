<?php
// Crie um array de produtos
$produtos = array(
    array("nome" => "Produto 1", "preco" => 19.99),
    array("nome" => "Produto 2", "preco" => 29.99),
    array("nome" => "Produto 3", "preco" => 9.99),
    array("nome" => "Produto 4", "preco" => 14.99)
);

// Exiba a lista de produtos
echo "<h1>Lista de Produtos</h1>";
echo "<ul>";

foreach ($produtos as $produto) {
    echo "<li>{$produto['nome']} - R$ {$produto['preco']}</li><br>";
}

echo "</ul>";
?>
