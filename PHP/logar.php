<?php
    session_start();
    include_once 'conexao.php';
    if((isset($_POST['email'])) && (isset($_POST['senha']))){ 
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        
        // requerimento de dados do banco
        $sql = "SELECT * FROM alunos WHERE email = '$email' && senha = '$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);
        
        // validação dos dados
        if(empty($resultado)){
            $_SESSION['loginErro'] = "Usuário ou Senha invalidos";
            header("Location: ../login.php"); 
        }elseif(isset($resultado)){
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['senha']=$senha;
            header("Location: ../indexLogado.php");
           
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou Senha invalidos";
        header("Location: ../login.php");
    }
