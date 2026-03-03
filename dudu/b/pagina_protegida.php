<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$usuarios = [
    "admin" => ["senha" => "12345", "cargo" => "Administrador"],
    "gabriel" => ["senha" => "123", "cargo" => "Usuário"]
];


if (isset($usuarios[$usuario]) && $usuarios[$usuario]["senha"] == $senha) {
    echo "Bem-vindo, $usuario! Seu cargo é: " . $usuarios[$usuario]["cargo"];


    } else {
    echo "Erro: Usuário ou senha incorretos.";
}
?>