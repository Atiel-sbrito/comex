<?php
class Database {
    private $pdo;

    public function __construct() {
        try {
            // Cria uma conexão PDO com o banco de dados SQLite
            $this->pdo = new PDO('sqlite:/Comex/SRC/banco_de_dados.db');

            // Configura o PDO para lançar exceções quando ocorrer um erro
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Conexão estabelecida com sucesso!";
        } catch (PDOException $e) {
            // Se ocorrer um erro, ele será exibido na tela
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}
?>
