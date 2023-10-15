<?php
// Crie um array com os dados do cliente
$cliente = array(
    "nome" => "Atiel dos Santos Brito",
    "email" => "atielsantoss@gmail.com",
    "celular" => "(11) 42451045",
    "endereco" => "123 Rua de onde eu moro, Bairro, Cidade"
);

// Acesso aos dados do cliente
$nomeCliente = $cliente["nome"];
$emailCliente = $cliente["email"];
$celularCliente = $cliente["celular"];
$enderecoCliente = $cliente["endereco"];

// Exibir os dados do cliente
echo "Nome: $nomeCliente<br>";
echo "E-mail: $emailCliente<br>";
echo "Celular: $celularCliente<br>";
echo "Endereço: $enderecoCliente<br>";
?>
