<?php

?>
<html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Módulos</title>
        
        <!-- Links -->
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/style.css"
	<link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
	<link rel="stylesheet" type="text/css" href="CSS/formulario.css">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
        
        
    </head>
    <body>
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
                    <a class="form-inline btn btn-danger" href="PHP/sair.php">Sair</a>
                </nav>
                
            </div>
	</header>
        <!-- Conteúdo -->
        <div class="container-fluid mt-2">
            <!-- Módulo 1 -->
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-8 border rounded-lg border-dark" id="modulo1">
                    <div class="row">
                        <div class="col-2 border border-dark rounded m-2 ml-4 align-content-between" style="height: 120px">
                            <img src="images/img-modulo-1.png" class="img-fluid mt-3">
                        </div>
                        <div class="col-9 mt-2">
                            <p><b>Módulo 1: Figuras de valores</b></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="col-9">
                          
                        </div>
                        <div class="col-3">
                            <a class="form-inline btn btn-primary" href="#">Começar módulo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
        
        <!-- link dos scripts -->
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        
        
        <!-- Scripts -->
        
    </body>
</html>

