<?php
session_start();
include_once 'PHP/conexao.php';
$email = $_SESSION['email'];
$result_usuario= "SELECT * FROM alunos WHERE email = '$email'";
$resultado_usuario= mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Alterar dados</title>
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/style.css"
	<link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
	<link rel="stylesheet" type="text/css" href="CSS/formulario.css">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
        
</head>

<body>
    
    <!-- cabeçalho -->
	<header id="cabecalho">
            
                <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-primary">
                   <div class="container">
                    <a class="navbar-brand h1 mb-0" href="#">MI</a>
                    
                    <!-- Area de navegação do cabeçalho -->
                    <div class="container col-8 align-content-center">
                    <div class="collapse navbar-collapse container-fluid" id="navbarSite">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="index.php">home</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="modulos.php">Módulos</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="#">Editor de Partituras</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="#">Ajuda</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="#">Contate-nos</a>
                            </li>
                            <li>
                                <a class="nav-link" href="contaUsuario.php">Minha Conta</a>
                            </li>
                        </ul>
                        
                    </div>
                    </div>
                    <a class="form-inline btn btn-danger" href="login.php">Sair</a>
                </nav>
                
            </div>
	</header>
    
        <!-- Formulário de cadastro -->
	<div class="container-fluid">
        <div class="container rounded col-6 align-content-center bg-secondary pt-2 pb-2 mt-4 box1">
        <div class="container col-4 align-content-center">
                <h2 class="text-white">Alteração</h2>
        </div>
        <form method="POST" action="PHP/atualizar.php">
            <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
            <div class="form-group formGroup1">
                <label for="nome" class="text-white lblForms">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome e sobrenome aqui" size="35" value="<?php echo $row_usuario['nome']; ?>"><br>
            </div>
            
            <div class="form-group formGroup2">
		<label for="nomeDeUsuario" class="text-white lblForms">Nome de Usuário:</label>
                <input type="text" class="form-control" name="nomeDeUsuario" placeholder="Digite o nome de usuário aqui" size="35" value="<?php echo $row_usuario['nomedeusuario']; ?>"><br>
            </div>
            
            <div class="form-group formGroup3">
		<label for="email" class="text-white lblForms">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Digite seu email aqui" size="35" value="<?php echo $row_usuario['email']; ?>"><br>
            </div>
            
            <div class="form-group formGroup4">
		<label for="senha" class="text-white lblForms">Senha:</label>
                <input type="password" class="form-control" name="senha" placeholder="escolha sua senha" size="35" value="<?php echo $row_usuario['senha']; ?>"><br>
            </div>
            
            <div class="col-12 align-content-center form-group botao1">
                <input type="submit" class="btn-primary form-control-lg rounded col-12" value="Alterar">
            </div>
            <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
	</form>
        </div>
        </div>
    
    <!--Scripts(Link das linguagens) -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
    
    <!--Animação de entrada dos elementos-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#conteudo').css('height','650px');
                $('.box1').css('height', '600px');
                $('.box1').hide().delay('400').fadeIn("slow");
                $('.formGroup1').hide().delay('600').fadeIn("slow");
                $('.formGroup2').hide().delay('800').fadeIn("slow");
                $('.formGroup3').hide().delay('1000').fadeIn("slow");
                $('.formGroup4').hide().delay('1200').fadeIn("slow");
                $('.botao1').hide().delay('1400').fadeIn("slow");
            });
        </script>
</body>
</html>
