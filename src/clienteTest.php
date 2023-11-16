<?php
use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase {
    public function testGetNome() {
        $cliente = new Cliente("Atiel", "atielsantoss@gmail.com", "11943452045", "Rua Salvador Branco de Andrade, nº 182");
        $this->assertEquals("Atiel", $cliente->getNome());
    }

    public function testGetEmail() {
        $cliente = new Cliente("Atiel", "atielsantoss@gmail.com", "11943452045", "Rua Salvador Branco de Andrade, nº 182");
        $this->assertEquals("atielsantoss@gmail.com", $cliente->getEmail());
    }

    public function testGetCelular() {
        $cliente = new Cliente("Atiel", "atielsantoss@gmail.com", "11943452045", "Rua Salvador Branco de Andrade, nº 182");
        $this->assertEquals("11943452045", $cliente->getCelular());
    }

    public function testGetEndereco() {
        $cliente = new Cliente("Atiel", "atielsantoss@gmail.com", "11943452045", "Rua Salvador Branco de Andrade, nº 182");
        $this->assertEquals("Rua Salvador Branco de Andrade, nº 182", $cliente->getEndereco());
    }

    public function testFormatarCelular() {
        $cliente = new Cliente("Atiel", "atielsantoss@gmail.com", "11943452045", "Rua Salvador Branco de Andrade, nº 182");
        $this->assertEquals("(11) 94345-2045", $cliente->formatarCelular());
    }
}
?>
