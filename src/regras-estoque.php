<?php

require_once 'database.php';

$db = new Database();
$pdo = $db->getPdo();

class Produto {
    private $nome;
    private $estoque;

    public function __construct($nome, $estoque) {
        $this->nome = $nome;
        if ($estoque < 0) {
            throw new InvalidArgumentException("O estoque não pode ser negativo.");
        }
        $this->estoque = $estoque;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function adicionarEstoque($quantidade) {
        if ($quantidade < 0) {
            throw new InvalidArgumentException("A quantidade a ser adicionada não pode ser negativa.");
        }
        $this->estoque += $quantidade;
    }

    public function removerEstoque($quantidade) {
        if ($quantidade < 0) {
            throw new InvalidArgumentException("A quantidade a ser removida não pode ser negativa.");
        }
        if ($this->estoque - $quantidade < 0) {
            throw new InvalidArgumentException("A quantidade em estoque não pode ser menor que zero.");
        }
        $this->estoque -= $quantidade;
    }
}

// Exemplo de uso:

try {
    $produto = new Produto("Produto 19", 2);
    $produto->adicionarEstoque(0);
    $produto->removerEstoque(1);
    echo "Nome do Produto: " . $produto->getNome() . "<br>";
    echo "Quantidade em Estoque: " . $produto->getEstoque() . "<br>";
} catch (InvalidArgumentException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

