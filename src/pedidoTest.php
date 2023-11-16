<?php
use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase {
    public function testGetId() {
        $pedido = new Pedido(1, "Cliente", "Produto");
        $this->assertEquals(1, $pedido->getId());
    }

    public function testGetCliente() {
        $pedido = new Pedido(1, "Cliente", "Produto");
        $this->assertEquals("Cliente", $pedido->getCliente());
    }

    public function testGetProdutos() {
        $pedido = new Pedido(1, "Cliente", "Produto");
        $this->assertEquals("Produto", $pedido->getProdutos());
    }
}
?>
