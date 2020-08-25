<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nomeDeUsuario = filter_input(INPUT_POST, 'nomeDeUsuario', FILTER_SANITIZE_STRING);;
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);

$add_aluno = "INSERT INTO alunos (nome, nomedeusuario, email, senha) VALUES ('$nome', '$nomeDeUsuario', '$email', '$senha')";
mysqli_query($conn, $add_aluno);

if (mysqli_insert_id($conn)){
    header("location: ../index.php");
} else{
    header("location: ../cadastro.php");
}