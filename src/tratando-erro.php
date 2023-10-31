<?php
class Produto {
    private $nome;
    private $estoque;

    public function __construct($nome, $estoque) {
        if ($estoque < 0) {
            throw new InvalidArgumentException("O estoque não pode ser negativo.");
        }
        $this->nome = $nome;
        $this->estoque = $estoque;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function adicionarEstoque($quantidade) {
        try {
            if ($quantidade < 0) {
                throw new InvalidArgumentException("A quantidade a ser adicionada não pode ser negativa.");
            }
            $this->estoque += $quantidade;
        } catch (InvalidArgumentException $e) {
            echo "Erro ao adicionar ao estoque: " . $e->getMessage();
        }
    }

    public function removerEstoque($quantidade) {
        try {
            if ($quantidade < 0) {
                throw new InvalidArgumentException("A quantidade a ser removida não pode ser negativa.");
            }
            if ($this->estoque - $quantidade < 0) {
                throw new LogicException("A quantidade em estoque não pode ser menor que zero.");
            }
            $this->estoque -= $quantidade;
        } catch (InvalidArgumentException $e) {
            echo "Erro ao remover do estoque: " . $e->getMessage();
        } catch (LogicException $e) {
            echo "Erro ao remover do estoque: " . $e->getMessage();
        }
    }
}

// Exemplo de uso:
try {
    $produto = new Produto("Produto 1", 10);
    $produto->adicionarEstoque(5);
    $produto->removerEstoque(15);
    echo "Nome do Produto: " . $produto->getNome() . "<br>";
    echo "Quantidade em Estoque: " . $produto->getEstoque() . "<br>";
} catch (InvalidArgumentException $e) {
    echo "Erro: " . $e->getMessage();
} catch (LogicException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
