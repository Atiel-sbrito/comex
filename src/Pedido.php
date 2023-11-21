<?php


require_once 'database.php';

$db = new Database();
$pdo = $db->getPdo();

class Pedido {
    private $id;
    private $cliente;
    private $produtos;

    public function __construct($id, $cliente, $produtos) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->produtos = $produtos;
    }

    public function getId() {
        return $this->id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getProdutos() {
        return $this->produtos;
    }
}

// Criar um objeto Pedido com os dados fornecidos
$cliente = "Atiel";
$produto = "geladeira";
$pedido = new Pedido(1, $cliente, $produto);

// Exibir os valores atribuídos à classe
echo "ID do Pedido: " . $pedido->getId() . "<br>";
echo "Cliente: " . $pedido->getCliente() . "<br>";
echo "Produtos: " . $pedido->getProdutos() . "<br>";
?>
