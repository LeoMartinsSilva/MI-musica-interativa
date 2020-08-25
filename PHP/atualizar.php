<?php
session_start();
include_once 'conexao.php';

// variáveis:
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nomeDeUsuario = filter_input(INPUT_POST, 'nomeDeUsuario', FILTER_SANITIZE_STRING);;
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);

$result_usuario = "UPDATE alunos SET nome = '$nome', nomedeusuario = '$nomeDeUsuario', email = '$email', senha = '$senha' WHERE id='$id'";
$resultado_usuario= mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg']= "<p class='text-white ml-3'>Usuário alterado com sucesso</p>";
    header("Location: ../contaUsuario.php");
}else{
    $_SESSION['msg']= "<p class='text-danger ml-3'>Erro ao alterar usuário</p>";
    header("Location: ../alteracao.php?id=$id");
}

