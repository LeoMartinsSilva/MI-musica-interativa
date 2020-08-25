<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<meta charset="utf-8">
	<title>MI - Teoria Musical</title>
        
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
                    <div class="container col-7 align-content-center">
                    <div class="collapse navbar-collapse container-fluid" id="navbarSite">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="index.php">home</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="#">Módulos</a>
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
        
        <!-- Conteúdo da página -->
        <div id="conteudo">
            <div class="container" id="texto1">
                <div class="container col-10 col-lg-6 col-sm-10 mb-3 mx-0 pb-2 mt-3 border border-dark rounded bg-white">
                    <div class="container col-1 mx-0">
                    <p class="border border-white rounded-circle pl-2 pr-3 text-white bg-dark">1</p>
                    </div>
                    <p class="text-justify pl-3">A humanidade sempre procurou registrar suas ideias. A arte teve papel importante nesse processo; por meio das pinturas rupestres e hierogrifos, por exemplo.</p>
                </div>
            </div>
            
            <div class="container row" id="texto2">
                <div class="mx-0 col-6">
                </div>
                <div class="container col-10 col-lg-6 col-sm-10 my-3 mx-0 border border-dark rounded bg-white">
                    <div class="container col-1 mx-0">
                    <p class="border border-white rounded-circle pl-2 pr-3 text-white bg-dark">2</p>
                    </div>
                    <p class="text-justify pl-3">Com a música não foi diferente. Vários povos desenvolviam formas de registrar graficamente seus sons e assim, criar suas músicas.</p>
                </div>
            </div>
            
            <div class="container" id="texto3">
                <div class="container col-10 col-lg-6 col-sm-10 my-3 pb-2 mx-0 border border-dark rounded bg-white">
                    <div class="container col-1 mx-0">
                    <p class="border border-white rounded-circle pl-2 pr-3 text-white bg-dark">3</p>
                    </div>
                    <p class="text-justify pl-3">A notação musical, utilizada atualmente na cultura ocidental, surgiu por volta do século ?; e foi se aperfeiçoando com o tempo</p>
                </div>
            </div>
            
            <div class="container row" id="texto4">
                <div class="mx-0 col-6">
                </div>
                <div class="container col-10 col-lg-6 col-sm-10 my-3 mx-0 pb-2 border border-dark rounded bg-white">
                    <div class="container col-1 mx-0">
                    <p class="border border-white rounded-circle pl-2 pr-3 text-white bg-dark">4</p>
                    </div>
                    <p class="text-justify pl-3">O conhecimento da notação musical, os sinais que representam os sons, os silêncios e suas varaições, possibilitam o acesso a música de diversas épocas e culturas até mesmo de épocas que não existiam gravações fonograficas</p>
                </div>
            </div>
        </div>

        <!-- Copyright -->
            <div class="footer-copyright text-center py-3 bg-primary">© 2019 Copyright: MI - Música Interativa
            </div>
            

        
        <!-- link dos scripts -->
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        
        <!-- animação de entrada dos textos -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#conteudo').css('height','650px');
                $('#texto1').hide().delay('600').fadeIn("slow");
                $('#texto2').hide().delay('900').fadeIn("slow");    
                $('#texto3').hide().delay('1200').fadeIn("slow");
                $('#texto4').hide().delay('1500').fadeIn("slow");
            });
            </script>
    </body>
<?php
?>
</html>



