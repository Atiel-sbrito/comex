<?php
class Produto {
    private $nome;
    private $preco;
    private $quantidadeEmEstoque;

    public function __construct($nome, $preco, $quantidadeEmEstoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEmEstoque = $quantidadeEmEstoque;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getQuantidadeEmEstoque() {
        return $this->quantidadeEmEstoque;
    }

    public function adicionarProduto($quantidade) {
        $this->quantidadeEmEstoque += $quantidade;
    }

    public function removerProduto($quantidade) {
        if ($this->quantidadeEmEstoque >= $quantidade) {
            $this->quantidadeEmEstoque -= $quantidade;
        } else {
            echo "Quantidade insuficiente em estoque.";
        }
    }

    public function calcularValorTotalEmEstoque() {
        return $this->preco * $this->quantidadeEmEstoque;
    }
}

// Criar um objeto Produto com os dados fornecidos
$produto = new Produto("geladeira", 2080.00, 100);

// Exibir os valores atribuídos à classe
echo "Nome do Produto: " . $produto->getNome() . "<br>";
echo "Preço do Produto: R$" . $produto->getPreco() . "<br>";
echo "Quantidade em Estoque: " . $produto->getQuantidadeEmEstoque() . "<br>";

// Adicionar 10 unidades ao estoque
$produto->adicionarProduto(10);

// Remover 5 unidades do estoque
$produto->removerProduto(5);

// Exibir o valor total em estoque
echo "Valor Total em Estoque: R$" . $produto->calcularValorTotalEmEstoque() . "<br>";
?>
