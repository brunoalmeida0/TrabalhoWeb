<?php

// Conecta ao BD
$conexao = new mysqli("localhost", "root", "", "trabalhoweb");

// Deu erro na conexão?
if ($conexao->connect_error) {

echo "Erro ao conectar: " . $conexao->connect_error . "<br>";

}

?>