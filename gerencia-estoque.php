<?php
// Inicialize o estoque de produtos
$estoque = array(
    "Produto 1" => array("preco" => 19.99, "quantidade" => 10),
    "Produto 2" => array("preco" => 29.99, "quantidade" => 5),
    "Produto 3" => array("preco" => 9.99, "quantidade" => 20)
);

// Função para adicionar produtos ao estoque
function adicionarProduto($estoque, $nome, $preco, $quantidade) {
    if (isset($estoque[$nome])) {
        $estoque[$nome]["quantidade"] += $quantidade;
    } else {
        $estoque[$nome] = array("preco" => $preco, "quantidade" => $quantidade);
    }
    return $estoque;
}

// Função para remover produtos do estoque
function removerProduto($estoque, $nome, $quantidade) {
    if (isset($estoque[$nome])) {
        if ($estoque[$nome]["quantidade"] >= $quantidade) {
            $estoque[$nome]["quantidade"] -= $quantidade;
        } else {
            echo "Quantidade insuficiente em estoque.";
        }
    } else {
        echo "Produto não encontrado.";
    }
    return $estoque;
}

// Função para verificar a disponibilidade de um produto específico
function verificarDisponibilidade($estoque, $nome) {
    if (isset($estoque[$nome])) {
        return $estoque[$nome]["quantidade"];
    } else {
        return 0;
    }
}

// Adicionar um novo produto
$estoque = adicionarProduto($estoque, "Produto 4", 14.99, 15);

// Remover produtos do estoque
$estoque = removerProduto($estoque, "Produto 2", 3);

// Verificar a disponibilidade de um produto específico
$disponibilidade = verificarDisponibilidade($estoque, "Produto 3");

// Exibir o estoque atual
echo "<h1>Estoque de Produtos</h1>";
echo "<ul>";

foreach ($estoque as $nome => $produto) {
    echo "<li>$nome - R$ {$produto['preco']} - Disponível: {$produto['quantidade']} unidades</li>";
}

echo "</ul>";
?>
