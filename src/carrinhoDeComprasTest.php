<?php

require_once 'database.php';

$db = new Database();
$pdo = $db->getPdo();

use PHPUnit\Framework\TestCase;

class CarrinhoDeComprasTest extends TestCase {
    public function testAdicionarProduto() {
        $carrinho = new CarrinhoDeCompras();
        $produto = new Produto("geladeira", 1500.00);
        $carrinho->adicionarProduto($produto);
        $this->assertEquals(1, count($carrinho->listarProdutos()));
    }

    public function testRemoverProduto() {
        $carrinho = new CarrinhoDeCompras();
        $produto = new Produto("geladeira", 1500.00);
        $carrinho->adicionarProduto($produto);
        $carrinho->removerProduto($produto);
        $this->assertEquals(0, count($carrinho->listarProdutos()));
    }

    public function testCalcularDesconto() {
        $carrinho = new CarrinhoDeCompras();
        $produto = new Produto("geladeira", 1500.00);
        $carrinho->adicionarProduto($produto);
        $this->assertEquals(150.00, $carrinho->calcularDesconto(0.1));
    }

    public function testCalcularFrete() {
        $carrinho = new CarrinhoDeCompras();
        $produto = new Produto("geladeira", 1500.00);
        $carrinho->adicionarProduto($produto);
        $this->assertEquals(0, $carrinho->calcularFrete());
    }

    public function testCalcularTotal() {
        $carrinho = new CarrinhoDeCompras();
        $produto = new Produto("geladeira", 1500.00);
        $carrinho->adicionarProduto($produto);
        $this->assertEquals(1500.00, $carrinho->calcularTotal());
    }
}
?>
