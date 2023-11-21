
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

class Cliente {
    private $nome;
    private $email;
    private $celular;
    private $endereco;
    private $totalCompras;
    private $pedidos = []; // Novo atributo para armazenar pedidos

    public function __construct($nome, $email, $celular, $endereco) {
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->endereco = $endereco;
        $this->totalCompras = 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getTotalCompras() {
        return $this->totalCompras;
    }

    public function setTotalCompras($valor) {
        $this->totalCompras = $valor;
    }

    public function formatarCelular() {
        $celular = $this->getCelular();

        // Remove todos os caracteres não numéricos do número de celular
        $celular = preg_replace('/\D/', '', $celular);

        // Aplica a máscara "(XX) XXXXX-XXXX" ao número de celular
        $celularFormatado = preg_replace('/^(\d{2})(\d{5})(\d{4})$/', '($1) $2-$3', $celular);

        return $celularFormatado;
    }

    // Métodos para lidar com a lista de pedidos
    public function getPedidos() {
        return $this->pedidos;
    }

    public function adicionarPedido($pedido) {
        $this->pedidos[] = $pedido;
    }
}

// Criar um objeto Cliente com os dados fornecidos
$cliente = new Cliente("Atiel", "atielsantoss@gmail.com", "11943452045", "Rua Salvador Branco de Andrade, nº 182");

// Exibir os valores atribuídos à classe
echo "Nome: " . $cliente->getNome() . "<br>";
echo "Email: " . $cliente->getEmail() . "<br>";
echo "Celular: " . $cliente->formatarCelular() . "<br>"; // Chame o método formatarCelular
echo "Endereço: " . $cliente->getEndereco() . "<br>";
echo "Total de Compras: " . $cliente->getTotalCompras() . "<br>";

// Criar alguns pedidos e adicioná-los à lista de pedidos do cliente
$pedido1 = new Pedido(1, $cliente->getNome(), "geladeira");
$pedido2 = new Pedido(2, $cliente->getNome(), "televisor");
$cliente->adicionarPedido($pedido1);
$cliente->adicionarPedido($pedido2);

// Exibir a lista de pedidos do cliente
echo "Lista de Pedidos do Cliente:<br>";
$pedidosDoCliente = $cliente->getPedidos();
foreach ($pedidosDoCliente as $pedido) {
    echo "ID do Pedido: " . $pedido->getId() . ", Cliente: " . $pedido->getCliente() . ", Produto: " . $pedido->getProdutos() . "<br>";
}
?>
