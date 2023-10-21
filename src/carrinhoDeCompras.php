<?php
class CarrinhoDeCompras {
    private $produtos = [];

    public function adicionarProduto($produto) {
        $this->produtos[] = $produto;
    }

    public function removerProduto($produto) {
        $key = array_search($produto, $this->produtos);
        if ($key !== false) {
            unset($this->produtos[$key]);
        }
    }

    public function calcularDesconto($percentual) {
        $desconto = 0;
        foreach ($this->produtos as $produto) {
            $desconto += $produto->getPreco() * $percentual;
        }
        return $desconto;
    }

    public function calcularFrete() {
        $valorTotal = $this->calcularTotal();
        if ($valorTotal > 100) {
            return 0;
        } else {
            return 9.99;
        }
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }

    public function listarProdutos() {
        return $this->produtos;
    }
}

class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

// Criar um carrinho de compras
$carrinho = new CarrinhoDeCompras();

// Adicionar produtos ao carrinho
$produto1 = new Produto("geladeira", 1500.00);
$produto2 = new Produto("televisor", 800.00);
$carrinho->adicionarProduto($produto1);
$carrinho->adicionarProduto($produto2);

// Remover um produto do carrinho
$carrinho->removerProduto($produto2);

// Calcular o valor total da compra
$totalCompra = $carrinho->calcularTotal();
echo "Valor Total da Compra: R$ " . $totalCompra . "<br>";

// Calcular o desconto
$desconto = $carrinho->calcularDesconto(0.1); // 10% de desconto
echo "Desconto: R$ " . $desconto . "<br>";

// Calcular o frete
$frete = $carrinho->calcularFrete();
echo "Frete: R$ " . $frete . "<br>";

// Listar produtos no carrinho
$produtosNoCarrinho = $carrinho->listarProdutos();
echo "Produtos no Carrinho:<br>";
foreach ($produtosNoCarrinho as $produto) {
    echo "Produto: " . $produto->getNome() . ", Preço: R$ " . $produto->getPreco() . "<br>";
}
?>
