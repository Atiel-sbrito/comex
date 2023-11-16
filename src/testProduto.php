<?php
use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase {
    public function testConstrutor() {
        $produto = new Produto("geladeira", 2080.00, 100);
        $this->assertEquals("geladeira", $produto->getNome());
        $this->assertEquals(2080.00, $produto->getPreco());
        $this->assertEquals(100, $produto->getQuantidadeEmEstoque());
    }

    public function testAdicionarProduto() {
        $produto = new Produto("geladeira", 2080.00, 100);
        $produto->adicionarProduto(10);
        $this->assertEquals(110, $produto->getQuantidadeEmEstoque());
    }

    public function testRemoverProduto() {
        $produto = new Produto("geladeira", 2080.00, 100);
        $produto->removerProduto(5);
        $this->assertEquals(95, $produto->getQuantidadeEmEstoque());
    }

    public function testCalcularValorTotalEmEstoque() {
        $produto = new Produto("geladeira", 2080.00, 100);
        $this->assertEquals(208000.00, $produto->calcularValorTotalEmEstoque());
    }
}
?>
