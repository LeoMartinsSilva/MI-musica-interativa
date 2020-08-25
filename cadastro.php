<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Cadastre-se</title>
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/style.css"
	<link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
	<link rel="stylesheet" type="text/css" href="CSS/formulario.css">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
        
       

</head>

<body id="conteudo">
    
    <!-- cabeçalho -->
	<header id="cabecalho">
            
                <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-primary">
                   <div class="container">
                    <a class="navbar-brand h1 mb-0" href="#">MI</a>
                    
                    <!-- Area de navegação do cabeçalho -->
                    <div class="container col-7 align-content-center">
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
                        </ul>
                        
                    </div>
                    </div>
                    <a class="form-inline btn btn-dark" href="login.php">Login</a>
                </nav>
                
            </div>
	</header>
    
        <!-- Formulário de cadastro -->
	<div class="container-fluid">
        <div class="container rounded col-6 align-content-center bg-secondary pt-2 pb-2 mt-4 box1">
        <div class="container col-4 align-content-center">
                <h2 class="text-white">Cadastro</h2>
        </div>
        <form method="POST" action="PHP/cadastrar.php">
                        
            <div class="form-group formGroup1">
                <label for="nome" class="lblForms text-white">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome e sobrenome aqui" size="35"><br>
            </div>
            
            <div class="form-group formGroup2">
		<label for="nomeDeUsuario" class="lblForms text-white">Nome de Usuário:</label>
                <input type="text" class="form-control" name="nomeDeUsuario" placeholder="Digite o nome de usuário aqui" size="35"><br>
            </div>
            
            <div class="form-group formGroup3">
		<label for="email" class="lblForms text-white">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Digite seu email aqui" size="35"><br>
            </div>
            
            <div class="form-group formGroup4">
		<label for="senha" class="lblForms text-white">Senha:</label>
                <input type="password" class="form-control" name="senha" placeholder="escolha sua senha" size="35"><br>
            </div>
            
            <div class="col-12 align-content-center form-group botao1">
                <input type="submit" class="btn-primary form-control-lg rounded col-12" value="Cadastrar">
            </div>
 
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