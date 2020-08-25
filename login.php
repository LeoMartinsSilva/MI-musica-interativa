<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mi-Teoria Musical</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="stylesheet" type="text/css" href="CSS/cabecalho.css">
	<link rel="stylesheet" type="text/css" href="CSS/formulario.css">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
        
        
</head>
<body id="conteudo">
	<header id="cabecalho">
            
                <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-primary">
                   <div class="container">
                    <a class="navbar-brand h1 mb-0" href="#">MI</a>
                    
                    <!-- Area de navegação do cabeçalho -->
                    <div class="collapse navbar-collapse container col-7 align-content-center" id="navbarSite">
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
                        </ul>
                        
                    </div>
                    <a class="form-inline btn btn-dark" href="login.php">Login</a>
                </nav>
                
            </div>
	</header>
	<div class="container-fluid">
             
                <div class="container col-6 align-content-center bg-secondary mt-4 rounded box1">
                <div class="container col-3 align-content-center">
                    <h2 class="text-white">Login</h2>
                </div>
                <form method="POST" action="PHP/logar.php">
                    <div class="form-group pt-3 formGroup1">	
			<label class="lblForms text-white">Email:</label>
                        <input class="form-control" type="email" name="email" placeholder="Email ou nome de usuário">
                    </div>
                    
                    <div class="form-group formGroup2">
			<label class= "lblForms text-white">Senha:</label>
                        <input class="form-control" type="password" name="senha" placeholder="senha">
                    </div>
                    
                    <div class="col-12 align-content-center form-group pb-1 botao1">
                        <input type="submit" class="btn-primary form-control-lg rounded col-12" value="Login">
                    </div>
		</form>
                    <div class="container col-3 align-content-center botao2">
                        <button class="btn-primary rounded mb-3"><a class="text-white" href="cadastro.php">Cadastrar-se</a></button>
                    </div> 
                    <p class="text-center text-warning">
                        <?php
                            if(isset($_SESSION['loginErro'])){
                                echo $_SESSION['loginErro'];
                                unset ($_SESSION['loginErro']);
                            }
                        ?>
                    </p>
                </div>
	</div>
    
    <!-- Scripts(Link das linguagens) -->
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

        <!--Animação de entrada dos elementos-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#conteudo').css('height','650px');
                $('.box1').css('height', '360px');
                $('.box1').hide().delay('400').fadeIn("slow");
                $('.formGroup1').hide().delay('600').fadeIn("slow");
                $('.formGroup2').hide().delay('800').fadeIn("slow");    
                $('.botao1').hide().delay('1000').fadeIn("slow");
                $('.botao2').hide().delay('1100').fadeIn("slow");
            });
        </script>
</body>
</html>