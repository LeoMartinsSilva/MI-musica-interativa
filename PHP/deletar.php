<?php
session_start();
include_once 'conexao.php';
$email = $_SESSION['email'];
$id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$query_deletar = "DELETE FROM alunos WHERE email='$email'"; // query padrão de deletar do banco
$resultado_deletar = mysqli_query($conn, $query_deletar); //variavel que executa a query no banco

if(mysqli_affected_rows($conn)){
    $_SESSION['msg']= "<p class='ml-3 text-white'>Usuário deletado com sucesso</p>";
    header("Location: ../index.php");
}else{
    $_SESSION['msg']= "<p class='ml-3 text-danger'>Erro ao deletar usuário</p>";
    header("Location: ../contaUsuario.php");
}